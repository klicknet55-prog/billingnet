<?php
/* Smarty version 4.5.3, created on 2026-04-18 00:26:36
  from 'F:\xampp\htdocs\billingnet\ui\ui\admin\settings\devices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69e26d4c5a9184_00410432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9b9954883cd61a3de5d0540f80798f3e5518029' => 
    array (
      0 => 'F:\\xampp\\htdocs\\billingnet\\ui\\ui\\admin\\settings\\devices.tpl',
      1 => 1763342386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_69e26d4c5a9184_00410432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <?php echo Lang::T('Installed Devices');?>

    </div>
    <div class="panel-body">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['devices']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                <div class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><b><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</b> <small>by <?php echo $_smarty_tpl->tpl_vars['d']->value['author'];?>
</small></div>
                        <div class="panel-body" style="overflow-y: scroll;">
                            <div style="max-height: 50px; min-height: 50px;"><?php echo nl2br(strip_tags($_smarty_tpl->tpl_vars['d']->value['description']));?>
</div>
                        </div>
                        <div class="panel-footer">
                            <center style="max-height: 40px; min-height: 40px;">
                                <span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['d']->value['file'];?>
</span>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value['url'], 'url', false, 'name');
$_smarty_tpl->tpl_vars['url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->do_else = false;
?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" target="_blank" class="label label-primary"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </center>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
