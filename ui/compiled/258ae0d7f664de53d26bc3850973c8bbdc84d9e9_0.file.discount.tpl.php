<?php
/* Smarty version 4.5.3, created on 2026-04-17 18:16:58
  from 'F:\xampp\htdocs\billingnet\system\plugin\ui\discount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69e216aa363e45_70674712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '258ae0d7f664de53d26bc3850973c8bbdc84d9e9' => 
    array (
      0 => 'F:\\xampp\\htdocs\\billingnet\\system\\plugin\\ui\\discount.tpl',
      1 => 1775909292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_69e216aa363e45_70674712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
    <div class="col-md-5">
        <div class="panel panel-primary panel-hovered mb20">
            <div class="panel-heading">Discount Management</div>
            <div class="panel-body">
                <form method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Diskon</label>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control" placeholder="Contoh: Promo Midtrans" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Tipe Diskon</label>
                        <div class="col-md-8">
                            <select name="type" class="form-control">
                                <option value="percent">Percent (%)</option>
                                <option value="amount">Nominal</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nilai</label>
                        <div class="col-md-8">
                            <input type="number" name="value" class="form-control" step="0.01" min="0.01" placeholder="Masukkan nilai diskon" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Gateway</label>
                        <div class="col-md-8">
                            <select name="gateway" class="form-control">
                                <option value="">All Gateways</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gateways']->value, 'gateway');
$_smarty_tpl->tpl_vars['gateway']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gateway']->value) {
$_smarty_tpl->tpl_vars['gateway']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['gateway']->value;?>
"><?php echo ucwords($_smarty_tpl->tpl_vars['gateway']->value);?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                            <p class="help-block">Kosongkan jika diskon berlaku untuk semua gateway.</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Plan</label>
                        <div class="col-md-8">
                            <select name="plan_id" class="form-control">
                                <option value="0">All Plans</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['plan']->value['name_plan'];?>
 - <?php echo $_smarty_tpl->tpl_vars['plan']->value['type'];?>
 (<?php echo $_smarty_tpl->tpl_vars['plan']->value['routers'];?>
)</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                            <p class="help-block">Pilih plan tertentu jika diskon hanya berlaku untuk plan itu.</p>
                        </div>
                    </div>

                    <div class="form-group mb0">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary btn-block">Tambah Discount</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="panel panel-default panel-hovered">
            <div class="panel-heading">Daftar Discount</div>
            <div class="panel-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Type</th>
                            <th>Value</th>
                            <th>Gateway</th>
                            <th>Plan</th>
                            <th>Status</th>
                            <th style="width: 120px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounts']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['d']->value->name;?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['d']->value->type == 'percent') {?>Percent<?php } else { ?>Nominal<?php }?></td>
                                <td><?php if ($_smarty_tpl->tpl_vars['d']->value->type == 'percent') {
echo $_smarty_tpl->tpl_vars['d']->value->value;?>
%<?php } else {
echo Lang::moneyFormat($_smarty_tpl->tpl_vars['d']->value->value);
}?></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['d']->value->gateway_name;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['d']->value->plan_name;?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value->status == 1) {?>
                                        <span class="label label-success">Aktif</span>
                                    <?php } else { ?>
                                        <span class="label label-default">Nonaktif</span>
                                    <?php }?>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
?_route=plugin/discount_toggle&id=<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
" class="btn btn-xs btn-warning">Toggle</a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
?_route=plugin/discount_delete&id=<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
" class="btn btn-xs btn-danger"
                                        onclick="return confirm('Hapus discount ini?');">Hapus</a>
                                </td>
                            </tr>
                        <?php
}
if ($_smarty_tpl->tpl_vars['d']->do_else) {
?>
                            <tr>
                                <td colspan="7" class="text-center text-muted">Belum ada discount.</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
