<?php
/* Smarty version 4.5.3, created on 2026-04-17 18:16:29
  from 'F:\xampp\htdocs\billingnet\ui\ui\widget\cron_monitor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69e2168d3e3f94_82282209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7216c8786b6bf63e97da6eb417515e9735c5dc3d' => 
    array (
      0 => 'F:\\xampp\\htdocs\\billingnet\\ui\\ui\\widget\\cron_monitor.tpl',
      1 => 1763342386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e2168d3e3f94_82282209 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['run_date']->value) {?>
    <?php $_smarty_tpl->_assignInScope('current_time', time());?>
    <?php $_smarty_tpl->_assignInScope('run_time', strtotime($_smarty_tpl->tpl_vars['run_date']->value));?>
    <?php if ($_smarty_tpl->tpl_vars['current_time']->value-$_smarty_tpl->tpl_vars['run_time']->value > 3600) {?>
        <div class="panel panel-cron-warning panel-hovered mb20 activities">
            <div class="panel-heading"><i class="fa fa-clock-o"></i> &nbsp; <?php echo Lang::T('Cron has not run for over 1 hour. Please
                check your setup.');?>
</div>
        </div>
    <?php } else { ?>
        <div class="panel panel-cron-success panel-hovered mb20 activities">
            <div class="panel-heading"><?php echo Lang::T('Cron Job last ran on');?>
: <?php echo $_smarty_tpl->tpl_vars['run_date']->value;?>
</div>
        </div>
    <?php }
} else { ?>
    <div class="panel panel-cron-danger panel-hovered mb20 activities">
        <div class="panel-heading"><i class="fa fa-warning"></i> &nbsp; <?php echo Lang::T('Cron appear not been setup, please check
                your cron setup.');?>
</div>
    </div>
<?php }
}
}
