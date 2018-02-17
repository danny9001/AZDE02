<?php /* Smarty version Smarty-3.1.19, created on 2018-02-16 09:50:09
         compiled from "/var/www/html/admin484fcynu7/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6353359665a86e191c25ab5-12515362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e747041e198083038fc018fad58d687a20baf72c' => 
    array (
      0 => '/var/www/html/admin484fcynu7/themes/default/template/content.tpl',
      1 => 1502731860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6353359665a86e191c25ab5-12515362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a86e191c27c41_14337412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a86e191c27c41_14337412')) {function content_5a86e191c27c41_14337412($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
