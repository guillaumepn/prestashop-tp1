<?php /* Smarty version Smarty-3.1.19, created on 2018-04-30 11:08:03
         compiled from "module:ps_contactinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14003130325ae6dcf31e22a6-12022825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:ps_contactinfo/nav.tpl',
      1 => 1525018847,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '14003130325ae6dcf31e22a6-12022825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_infos' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae6dcf31e59c4_79440490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae6dcf31e59c4_79440490')) {function content_5ae6dcf31e59c4_79440490($_smarty_tpl) {?><!-- begin /var/www/html/themes/esgi/modules/ps_contactinfo/nav.tpl -->
<div id="_desktop_contact_link">
  <div id="contact-link">
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      
      <?php echo smartyTranslate(array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

    <?php } else { ?>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
    <?php }?>
  </div>
</div>
<!-- end /var/www/html/themes/esgi/modules/ps_contactinfo/nav.tpl --><?php }} ?>
