<?php
/* Smarty version 4.5.3, created on 2026-04-18 00:30:23
  from 'F:\xampp\htdocs\billingnet\ui\ui\admin\autoload\pool.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69e26e2f1c4f85_94348804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae6c4c745948d24698f78cf36f422753ef10c4b0' => 
    array (
      0 => 'F:\\xampp\\htdocs\\billingnet\\ui\\ui\\admin\\autoload\\pool.tpl',
      1 => 1763342386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e26e2f1c4f85_94348804 (Smarty_Internal_Template $_smarty_tpl) {
?><option value=''><?php echo Lang::T('Select Pool');?>
</option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['pool_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['pool_name'];
if ($_smarty_tpl->tpl_vars['routers']->value == '') {?> - <?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];
}?></option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
