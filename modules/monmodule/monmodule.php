<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class MonModule extends Module
{
    public function __construct()
    {
        parent::__construct();
        $this->name = 'monmodule';
        $this->tab = 'front_office_features';
        $this->version = '0.1.0';
        $this->author = 'Guillaume Pham ngoc';
        $this->displayName = 'Mon module';
        $this->description = 'Avec ce module, vos clients pourront noter vos produits !';
        $this->bootstrap = true;
    }

    public function getContent()
    {
        $this->processForm();
        $pageContent = $this->fetch(_PS_MODULE_DIR_ . "monmodule/views/templates/hook/getContent.tpl");
        return $pageContent . $this->renderForm();
    }

    public function install()
    {
        parent::install();
        $this->registerHook('displayReassurance');
        $this->createTable();
        return true;
    }

    public function createTable()
    {
        $requete = "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."monmodule_comment` (
    `id_monmodule_comment` int(11) NOT NULL AUTO_INCREMENT,
    `id_product` int(11) NOT NULL,
    `grade` tinyint(1) NOT NULL,
    `comment` text NOT NULL,
    `date_add` datetime NOT NULL,
    PRIMARY KEY (`id_monmodule_comment`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
        Db::getInstance()->execute($requete);
    }

    public function hookDisplayReassurance()
    {
        $this->context->smarty->assign('enabled_grades', (int)Configuration::get('MONMOD_GRADES'));
        $this->context->smarty->assign('enabled_comments', (int)Configuration::get('MONMOD_COMMENTS'));

        $this->processFormCustomer();

        return $this->fetch(_PS_MODULE_DIR_ . "monmodule/views/templates/hook/form.tpl");
    }

    private function processFormCustomer()
    {
        if (!Tools::isSubmit('submit-form-customer')) {
            return false;
        }

        $grade = Tools::getValue('grade');
        $comment = Tools::getValue('comment');
        $id_product = Tools::getValue('id_product');

        $data = [
            'id_product' => $id_product,
            'grade' => $grade,
            'comment' => $comment,
            'date_add' => date("Y-m-d H:i:s")
        ];
        Db::getInstance()->insert('monmodule_comment', $data);
    }

    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('My Module configuration'),
                    'icon' => 'icon-envelope'
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enable grades:'),
                        'name' => 'enable_grades',
                        'desc' => $this->l('Enable grades on products.'),
                        'values' => array(
                            array(
                                'id' => 'enable_grades_1',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'enable_grades_0',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enable comments:'),
                        'name' => 'enable_comments',
                        'desc' => $this->l('Enable comments on products.'),
                        'values' => array(
                            array(
                                'id' => 'enable_comments_1',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'enable_comments_0',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            ),
        );

        $helper = new HelperForm();
        $helper->table = 'monmodulecomments';
        $helper->default_form_language = (int)Configuration::get('PS_LANG_DEFAULT');
        $helper->allow_employee_form_lang = (int)Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG');
        $helper->submit_action = 'submit_monmodule_form';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules',
                false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => array(
                'enable_grades' => Tools::getValue('enable_grades',Configuration::get('MONMOD_GRADES')),
                'enable_comments' => Tools::getValue('enable_comments',Configuration::get('MONMOD_COMMENTS')),
            ),
            'languages' => $this->context->controller->getLanguages()
        );

        return $helper->generateForm(array($fields_form));

    }

    public function processForm()
    {
        if (Tools::isSubmit('submit_monmodule_form')) {
            $enable_comments = Tools::getValue('enable_comments');
            Configuration::updateValue('MONMOD_COMMENTS', $enable_comments);
            $enable_grades = Tools::getValue('enable_grades');
            Configuration::updateValue('MONMOD_GRADES', $enable_grades);
            $this->context->smarty->assign('confirmation', true);
        }
    }

}