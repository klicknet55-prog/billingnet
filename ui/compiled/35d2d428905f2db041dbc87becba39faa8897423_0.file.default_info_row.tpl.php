<?php
/* Smarty version 4.5.3, created on 2026-04-17 18:42:57
  from 'F:\xampp\htdocs\billingnet\ui\ui\widget\default_info_row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69e21cc11179c5_66152029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35d2d428905f2db041dbc87becba39faa8897423' => 
    array (
      0 => 'F:\\xampp\\htdocs\\billingnet\\ui\\ui\\widget\\default_info_row.tpl',
      1 => 1763342386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e21cc11179c5_66152029 (Smarty_Internal_Template $_smarty_tpl) {
?><ol class="breadcrumb">
    <li><?php echo Lang::dateFormat($_smarty_tpl->tpl_vars['start_date']->value);?>
</li>
    <li><?php echo Lang::dateFormat($_smarty_tpl->tpl_vars['current_date']->value);?>
</li>
    <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin','Report'))) {?>
        <li onclick="window.location.href = '<?php echo Text::url('customers&search=&order=balance&filter=Active&orderby=desc');?>
'" style="cursor: pointer;">
            <?php echo Lang::T('Customer Balance');?>
 <sup><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
</sup>
            <b><?php echo number_format($_smarty_tpl->tpl_vars['cb']->value,0,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</b>
        </li>
    <?php }?>
</ol><?php }
}
