<?php /* Smarty version Smarty-3.1.19, created on 2018-04-29 21:38:32
         compiled from "/var/www/html/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14748858825ae61f381e55a3-38326710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be95f054f4a6a01685f44c5039b321bd2fc9397c' => 
    array (
      0 => '/var/www/html/modules/welcome/views/templates/tooltip.tpl',
      1 => 1525018843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14748858825ae61f381e55a3-38326710',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae61f381f1c29_95744551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae61f381f1c29_95744551')) {function content_5ae61f381f1c29_95744551($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
