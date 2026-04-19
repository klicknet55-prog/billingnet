<?php
/* Smarty version 4.5.3, created on 2026-04-17 18:16:29
  from 'F:\xampp\htdocs\billingnet\ui\ui\widget\info_payment_gateway.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69e2168d43b097_43383393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a5c461918d150b88e1a6cf20ff04889f44a35ed' => 
    array (
      0 => 'F:\\xampp\\htdocs\\billingnet\\ui\\ui\\widget\\info_payment_gateway.tpl',
      1 => 1763342386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e2168d43b097_43383393 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-success panel-hovered mb20 activities">
    <div class="panel-heading"><?php echo Lang::T('Payment Gateway');?>
: <?php echo str_replace(',',', ',$_smarty_tpl->tpl_vars['_c']->value['payment_gateway']);?>

    </div>
</div><?php }
}
