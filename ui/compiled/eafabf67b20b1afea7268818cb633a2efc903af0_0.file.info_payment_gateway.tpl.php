<?php
/* Smarty version 4.5.3, created on 2026-04-15 17:37:24
  from '/var/www/html/phpnuxbill/ui/ui/widget/info_payment_gateway.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69df6a642f7465_72072541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eafabf67b20b1afea7268818cb633a2efc903af0' => 
    array (
      0 => '/var/www/html/phpnuxbill/ui/ui/widget/info_payment_gateway.tpl',
      1 => 1763342386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69df6a642f7465_72072541 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-success panel-hovered mb20 activities">
    <div class="panel-heading"><?php echo Lang::T('Payment Gateway');?>
: <?php echo str_replace(',',', ',$_smarty_tpl->tpl_vars['_c']->value['payment_gateway']);?>

    </div>
</div><?php }
}
