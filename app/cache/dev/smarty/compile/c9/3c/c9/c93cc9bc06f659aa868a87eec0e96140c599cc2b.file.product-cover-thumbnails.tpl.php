<?php /* Smarty version Smarty-3.1.19, created on 2018-04-30 00:48:22
         compiled from "/var/www/html/themes/esgi/templates/catalog/_partials/product-cover-thumbnails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17345931845ae64bb6c7d8f0-16718118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c93cc9bc06f659aa868a87eec0e96140c599cc2b' => 
    array (
      0 => '/var/www/html/themes/esgi/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1525040496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17345931845ae64bb6c7d8f0-16718118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae64bb6c87a25_18229091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae64bb6c87a25_18229091')) {function content_5ae64bb6c87a25_18229091($_smarty_tpl) {?>
<div class="images-container">
  
    <div class="product-cover">
      <img class="js-qv-product-cover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
      <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
        <i class="material-icons zoom-in">&#xE8FF;</i>
      </div>
    </div>
  
</div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterProductThumbs'),$_smarty_tpl);?>

<?php }} ?>
