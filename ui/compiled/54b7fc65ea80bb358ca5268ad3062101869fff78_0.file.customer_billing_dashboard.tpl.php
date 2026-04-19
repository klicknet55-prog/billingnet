<?php
/* Smarty version 4.5.3, created on 2026-04-17 18:38:30
  from 'F:\xampp\htdocs\billingnet\system\plugin\ui\customer_billing_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69e21bb6022fa0_01874197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54b7fc65ea80bb358ca5268ad3062101869fff78' => 
    array (
      0 => 'F:\\xampp\\htdocs\\billingnet\\system\\plugin\\ui\\customer_billing_dashboard.tpl',
      1 => 1776411023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_69e21bb6022fa0_01874197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
@media (max-width: 767px) {
    .cb-mobile-sticky-name {
        overflow-x: auto;
        position: relative;
    }

    .cb-mobile-sticky-name table {
        min-width: 860px;
    }

    .cb-mobile-sticky-name table th:nth-child(2),
    .cb-mobile-sticky-name table td:nth-child(2) {
        position: sticky;
        left: 0;
        z-index: 3;
        background: #fff;
        box-shadow: 3px 0 0 rgba(0, 0, 0, 0.06);
    }

    .cb-mobile-sticky-name table thead th:nth-child(2) {
        z-index: 4;
        background: #f6f9fc;
    }
}
</style>

<?php if ($_smarty_tpl->tpl_vars['page_mode']->value == 'detail') {?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary panel-hovered panel-stacked mb30">
            <div class="panel-heading">Detail Tagihan Customer</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Nama:</strong> <?php echo $_smarty_tpl->tpl_vars['customer']->value['fullname'];?>
</p>
                        <p><strong>Username:</strong> <?php echo $_smarty_tpl->tpl_vars['customer']->value['username'];?>
</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>No HP:</strong> <?php echo $_smarty_tpl->tpl_vars['customer']->value['phonenumber'];?>
</p>
                        <p><strong>Total Nunggak:</strong> <?php echo $_smarty_tpl->tpl_vars['arrears_months']->value;?>
 bulan</p>
                    </div>
                </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/customer_billing" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-warning panel-hovered panel-stacked mb30">
            <div class="panel-heading">TAGIHAN</div>
            <div class="panel-body">
                <?php if (count($_smarty_tpl->tpl_vars['payment_options']->value) > 0) {?>
                <p class="text-muted">Centang tagihan yang ingin dibayar. Tagihan bulan ini diambil dari data paket pada tbl_user_recharges.</p>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Pilih</th>
                            <th>Sumber</th>
                            <th>Nama Tagihan</th>
                            <th>Nominal / Bulan</th>
                            <th>Sisa Bulan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_options']->value, 'bill');
$_smarty_tpl->tpl_vars['bill']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
$_smarty_tpl->tpl_vars['bill']->do_else = false;
?>
                        <tr>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['bill']->value['type'] == 'package') {?>
                                <input type="checkbox" class="cb-package" value="<?php echo $_smarty_tpl->tpl_vars['bill']->value['recharge_id'];?>
">
                                <?php } else { ?>
                                <input type="checkbox" class="cb-bill" value="<?php echo $_smarty_tpl->tpl_vars['bill']->value['name'];?>
">
                                <?php }?>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['source'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['display_name'];?>
</td>
                            <td><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['bill']->value['cost']);?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['remaining'];?>
</td>
                        </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                <p><strong>Total tagihan aktif:</strong> <?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['payment_options_total']->value);?>
</p>
                <button type="button" class="btn btn-primary cb-action-btn" onclick="submitSelectedPayment(<?php echo $_smarty_tpl->tpl_vars['customer']->value['id'];?>
)">
                    <i class="fa fa-money"></i> Bayar Tagihan Terpilih
                </button>
                <?php } else { ?>
                <div class="alert alert-info">Tidak ada tagihan aktif.</div>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success panel-hovered panel-stacked mb30">
            <div class="panel-heading">Tagihan Paket</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Paket</th>
                                <th>Router</th>
                                <th>Status Paket</th>
                                <th>Status Bayar</th>
                                <th>Expired</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recharges']->value, 'item', false, 'idx');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idx']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['idx']->value+1;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['namebp'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['routers'];?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 'on') {?>
                                    <span class="label label-success">Aktif</span>
                                    <?php } else { ?>
                                    <span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</span>
                                    <?php }?>
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['paid_by_expiration']) {?>
                                    <span class="label label-success">Sudah</span>
                                    <?php } else { ?>
                                    <span class="label label-danger">Belum</span>
                                    <?php }?>
                                </td>
                                <td><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['item']->value['expiration'],$_smarty_tpl->tpl_vars['item']->value['time']);?>
</td>
                                <td>
                                    <?php if (!$_smarty_tpl->tpl_vars['item']->value['can_pay']) {?>
                                    <span class="text-muted"><i class="fa fa-lock"></i> Sudah dibayar</span>
                                    <?php } else { ?>
                                    <button type="button" class="btn btn-xs btn-success cb-action-btn"
                                        onclick="submitPayment(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['customer']->value['id'];?>
, this)">
                                        <i class="fa fa-credit-card"></i> Bayar
                                    </button>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['is_expired']) {?>
                                    <button type="button" class="btn btn-xs btn-warning cb-action-btn"
                                        onclick="submitNunggak(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['customer']->value['id'];?>
)">
                                        <i class="fa fa-exclamation-triangle"></i> Nunggak
                                    </button>
                                    <?php } else { ?>
                                    <button type="button" class="btn btn-xs btn-warning" disabled title="Tombol nunggak aktif saat paket expired">
                                        <i class="fa fa-exclamation-triangle"></i> Nunggak
                                    </button>
                                    <?php }?>
                                    <?php }?>
                                </td>
                            </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
                <div class="alert alert-info">
                    Klik <strong>Bayar</strong> pada baris paket untuk membayar paket tertentu. Atau gunakan checklist TAGIHAN untuk membayar tagihan paket bulan ini dan additional bill sekaligus.
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
var cbSubmissionInProgress = false;
var cbCsrfToken = '<?php echo strtr((string)$_smarty_tpl->tpl_vars['csrf_token']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
var cbRequestToken = '<?php echo strtr((string)$_smarty_tpl->tpl_vars['request_token']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';

function cbLockActionButtons() {
    var buttons = document.querySelectorAll('.cb-action-btn');
    buttons.forEach(function (btn) {
        btn.disabled = true;
        if (!btn.getAttribute('data-original-text')) {
            btn.setAttribute('data-original-text', btn.innerHTML);
        }
        btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Processing...';
    });
}

function cbGuardSubmit() {
    if (cbSubmissionInProgress) {
        alert('Permintaan sedang diproses. Mohon tunggu...');
        return false;
    }
    cbSubmissionInProgress = true;
    cbLockActionButtons();
    return true;
}

function submitPayment(rechargeId, customerId) {
    if (!confirm('Proses pembayaran tagihan paket ini beserta additional bill yang dipilih?')) {
        return;
    }
    if (!cbGuardSubmit()) {
        return;
    }

    var form = document.createElement('form');
    form.method = 'POST';
    form.action = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/customer_billing/pay';
    form.style.display = 'none';

    function addField(name, value) {
        var inp = document.createElement('input');
        inp.type = 'hidden';
        inp.name = name;
        inp.value = value;
        form.appendChild(inp);
    }

    addField('customer_id', customerId);
    addField('recharge_ids[]', rechargeId);
    addField('csrf_token', cbCsrfToken);
    addField('request_token', cbRequestToken);

    var billCheckboxes = document.querySelectorAll('.cb-bill:checked');
    billCheckboxes.forEach(function (cb) {
        addField('bill_names[]', cb.value);
    });

    document.body.appendChild(form);
    form.submit();
}

function submitNunggak(rechargeId, customerId) {
    if (!confirm('Proses nunggak: update expired, buat invoice gateway nunggak, dan tambah additional bill jika belum ada?')) {
        return;
    }
    if (!cbGuardSubmit()) {
        return;
    }

    var form = document.createElement('form');
    form.method = 'POST';
    form.action = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/customer_billing/nunggak';
    form.style.display = 'none';

    function addField(name, value) {
        var inp = document.createElement('input');
        inp.type = 'hidden';
        inp.name = name;
        inp.value = value;
        form.appendChild(inp);
    }

    addField('customer_id', customerId);
    addField('recharge_id', rechargeId);
    addField('csrf_token', cbCsrfToken);
    addField('request_token', cbRequestToken);

    document.body.appendChild(form);
    form.submit();
}

function submitSelectedPayment(customerId) {
    var packageCheckboxes = document.querySelectorAll('.cb-package:checked');
    var billCheckboxes = document.querySelectorAll('.cb-bill:checked');
    if (packageCheckboxes.length === 0 && billCheckboxes.length === 0) {
        alert('Pilih minimal 1 tagihan');
        return;
    }

    if (packageCheckboxes.length > 1) {
        alert('Saat ini pembayaran checklist hanya bisa untuk 1 tagihan paket per proses');
        return;
    }

    if (!confirm('Proses pembayaran tagihan yang dipilih?')) {
        return;
    }
    if (!cbGuardSubmit()) {
        return;
    }

    var form = document.createElement('form');
    form.method = 'POST';
    form.action = packageCheckboxes.length > 0 ? '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/customer_billing/pay' : '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/customer_billing/pay_additional';
    form.style.display = 'none';

    function addField(name, value) {
        var inp = document.createElement('input');
        inp.type = 'hidden';
        inp.name = name;
        inp.value = value;
        form.appendChild(inp);
    }

    addField('customer_id', customerId);
    addField('csrf_token', cbCsrfToken);
    addField('request_token', cbRequestToken);
    packageCheckboxes.forEach(function (cb) {
        addField('recharge_ids[]', cb.value);
    });
    billCheckboxes.forEach(function (cb) {
        addField('bill_names[]', cb.value);
    });

    document.body.appendChild(form);
    form.submit();
}
<?php echo '</script'; ?>
>

<?php } elseif ($_smarty_tpl->tpl_vars['page_mode']->value == 'list') {?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary panel-hovered panel-stacked mb30">
            <div class="panel-heading">
                Data Tagihan Pelanggan - <?php echo $_smarty_tpl->tpl_vars['month_label']->value;?>

                <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/customer_billing/agents" class="btn btn-xs btn-warning pull-right">
                    <i class="fa fa-users"></i> Kelola Agent
                </a>
                <?php }?>
            </div>
            <div class="panel-body">
                <div class="row" style="margin-bottom:15px;">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Cari Customer</label>
                            <input type="text" class="form-control" id="cb-search" placeholder="Nama / Username...">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Status Tagihan</label>
                            <select class="form-control" id="cb-status">
                                <option value="">-- Semua Status --</option>
                                <option value="lunas">Lunas</option>
                                <option value="belum">Belum Bayar</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Router</label>
                            <select class="form-control" id="cb-router">
                                <option value="">-- Semua Router --</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_routers']->value, 'router');
$_smarty_tpl->tpl_vars['router']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['router']->value) {
$_smarty_tpl->tpl_vars['router']->do_else = false;
?>
                                <option value="<?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['router']->value, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['router']->value;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Nunggak</label>
                            <select class="form-control" id="cb-nunggak">
                                <option value="">-- Semua --</option>
                                <option value="ya">Ada Nunggak</option>
                                <option value="tidak">Tidak Nunggak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label>&nbsp;</label><br>
                            <button type="button" class="btn btn-default btn-sm" id="cb-reset">Reset</button>
                        </div>
                    </div>
                </div>
                <p><small class="text-muted" id="cb-count"></small></p>
                <div class="table-responsive cb-mobile-sticky-name">
                    <table class="table table-bordered table-hover table-striped" id="billing-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name Customer</th>
                                <th>Router</th>
                                <th>Jenis Paket</th>
                                <th>Paket/Plan</th>
                                <th>Harga Plan</th>
                                <th>Status Tagihan</th>
                                <th>Nunggak (bulan)</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                            <tr data-fullname="<?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['row']->value['fullname'], 'UTF-8');?>
"
                                data-username="<?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['row']->value['username'], 'UTF-8');?>
"
                                data-status="<?php if ($_smarty_tpl->tpl_vars['row']->value['paid_this_month']) {?>lunas<?php } else { ?>belum<?php }?>"
                                data-routers="<?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['row']->value['routers'], 'UTF-8');?>
"
                                data-nunggak="<?php echo $_smarty_tpl->tpl_vars['row']->value['arrears_months'];?>
">
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['no'];?>
</td>
                                <td>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
</strong><br>
                                    <small><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</small>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['routers'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['package_type'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['plan_name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['plan_price'];?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['paid_this_month']) {?>
                                    <span class="label label-success">Lunas</span>
                                    <?php } else { ?>
                                    <span class="label label-danger">Belum Bayar</span>
                                    <?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['arrears_months'];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/customer_billing/detail/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-info">
                                        <i class="fa fa-search"></i> Detail & Bayar
                                    </a>
                                </td>
                            </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>

                <hr>

                <h4 style="margin-top:10px;">Customer Expired</h4>
                <p><small class="text-muted">Daftar customer yang memiliki minimal 1 paket sudah expired.</small></p>
                <div class="table-responsive cb-mobile-sticky-name">
                    <table class="table table-bordered table-hover table-striped" id="billing-expired-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name Customer</th>
                                <th>Router</th>
                                <th>Jenis Paket</th>
                                <th>Paket/Plan</th>
                                <th>Jumlah Paket Expired</th>
                                <th>Expired Terakhir</th>
                                <th>Nunggak (bulan)</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($_smarty_tpl->tpl_vars['expired_rows']->value) > 0) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['expired_rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['no'];?>
</td>
                                    <td>
                                        <strong><?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
</strong><br>
                                        <small><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</small>
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['routers'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['package_type'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['plan_name'];?>
</td>
                                    <td><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['row']->value['expired_package_count'];?>
</span></td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['row']->value['latest_expired_at']) {?>
                                            <?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],$_smarty_tpl->tpl_vars['row']->value['latest_expired_at']);?>
 <?php echo date('H:i:s',$_smarty_tpl->tpl_vars['row']->value['latest_expired_at']);?>

                                        <?php } else { ?>
                                            -
                                        <?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['arrears_months'];?>
</td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/customer_billing/detail/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-info">
                                            <i class="fa fa-search"></i> Detail & Bayar
                                        </a>
                                    </td>
                                </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="9" class="text-center text-muted">Tidak ada customer expired.</td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
(function () {
    var searchIn = document.getElementById('cb-search');
    var statusIn = document.getElementById('cb-status');
    var routerIn = document.getElementById('cb-router');
    var nunggakIn = document.getElementById('cb-nunggak');
    var resetBtn = document.getElementById('cb-reset');
    var tbody = document.querySelector('#billing-table tbody');
    var countEl = document.getElementById('cb-count');
    var rows = tbody ? Array.from(tbody.querySelectorAll('tr')) : [];

    function applyFilter() {
        var search = searchIn.value.toLowerCase().trim();
        var status = statusIn.value;
        var router = routerIn.value;
        var nunggak = nunggakIn.value;
        var visible = 0;

        rows.forEach(function (tr) {
            var fullname = tr.getAttribute('data-fullname') || '';
            var username = tr.getAttribute('data-username') || '';
            var trStatus = tr.getAttribute('data-status') || '';
            var trRouters = tr.getAttribute('data-routers') || '';
            var trNunggak = parseInt(tr.getAttribute('data-nunggak') || '0', 10);

            var show = true;

            if (search && fullname.indexOf(search) === -1 && username.indexOf(search) === -1) {
                show = false;
            }
            if (status && trStatus !== status) {
                show = false;
            }
            if (router && trRouters.indexOf(router) === -1) {
                show = false;
            }
            if (nunggak === 'ya' && trNunggak <= 0) {
                show = false;
            }
            if (nunggak === 'tidak' && trNunggak > 0) {
                show = false;
            }

            tr.style.display = show ? '' : 'none';
            if (show) visible++;
        });

        if (countEl) {
            countEl.textContent = 'Menampilkan ' + visible + ' dari ' + rows.length + ' customer';
        }
    }

    searchIn.addEventListener('input', applyFilter);
    statusIn.addEventListener('change', applyFilter);
    routerIn.addEventListener('change', applyFilter);
    nunggakIn.addEventListener('change', applyFilter);
    resetBtn.addEventListener('click', function () {
        searchIn.value = '';
        statusIn.value = '';
        routerIn.value = '';
        nunggakIn.value = '';
        applyFilter();
    });

    applyFilter();
})();
<?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page_mode']->value == 'agents') {?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary panel-hovered panel-stacked mb30">
            <div class="panel-heading">
                <i class="fa fa-users"></i> Manajemen Assignment Customer per Agent
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/customer_billing" class="btn btn-xs btn-default pull-right">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
            <div class="panel-body">
                <?php if (count($_smarty_tpl->tpl_vars['agents']->value) > 0) {?>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Agent</th>
                            <th>Username</th>
                            <th>Customer Assigned</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agents']->value, 'ag', false, 'idx');
$_smarty_tpl->tpl_vars['ag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idx']->value => $_smarty_tpl->tpl_vars['ag']->value) {
$_smarty_tpl->tpl_vars['ag']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['idx']->value+1;?>
</td>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['ag']->value['fullname'];?>
</strong></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ag']->value['username'];?>
</td>
                            <td>
                                <span class="badge"><?php echo $_smarty_tpl->tpl_vars['ag']->value['customer_count'];?>
 customer</span>
                            </td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/customer_billing/agent_assign/<?php echo $_smarty_tpl->tpl_vars['ag']->value['id'];?>
"
                                    class="btn btn-sm btn-info">
                                    <i class="fa fa-pencil"></i> Kelola
                                </a>
                            </td>
                        </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                <?php } else { ?>
                <div class="alert alert-warning">
                    Tidak ada user Agent. Tambahkan agent di
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users">Settings &rsaquo; Users</a>.
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page_mode']->value == 'agent_assign') {?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary panel-hovered panel-stacked mb30">
            <div class="panel-heading">
                <i class="fa fa-user"></i>
                Assign Customer ke Agent: <strong><?php echo $_smarty_tpl->tpl_vars['agent']->value['fullname'];?>
</strong>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/customer_billing/agents" class="btn btn-xs btn-default pull-right">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
                <span class="badge pull-right" id="selected-count" style="margin-right:8px;"><?php echo $_smarty_tpl->tpl_vars['assigned_count']->value;?>
 dipilih</span>
            </div>
            <div class="panel-body">
                <div class="row" style="margin-bottom:10px;">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" id="aa-filter" class="form-control"
                                placeholder="Filter nama / username / nomor HP...">
                        </div>
                    </div>
                    <div class="col-md-6 text-right" style="padding-top:4px;">
                        <button type="button" class="btn btn-xs btn-default" onclick="aaSelectAll()">
                            <i class="fa fa-check-square-o"></i> Pilih Semua
                        </button>
                        <button type="button" class="btn btn-xs btn-default" onclick="aaDeselectAll()">
                            <i class="fa fa-square-o"></i> Batal Semua
                        </button>
                        <span class="text-muted" style="margin-left:8px;">
                            Tampil: <span id="aa-visible"><?php echo count($_smarty_tpl->tpl_vars['all_customers']->value);?>
</span>
                        </span>
                    </div>
                </div>

                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/customer_billing/agent_save">
                    <input type="hidden" name="agent_id" value="<?php echo $_smarty_tpl->tpl_vars['agent']->value['id'];?>
">
                    <input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>
">
                    <input type="hidden" name="request_token" value="<?php echo $_smarty_tpl->tpl_vars['request_token']->value;?>
">
                    <div style="max-height:430px; overflow-y:auto; border:1px solid #ddd; border-radius:4px;">
                        <table class="table table-bordered table-hover" style="margin:0;" id="aa-table">
                            <thead style="position:sticky;top:0;background:#ecf0f1;z-index:1;">
                                <tr>
                                    <th style="width:40px;text-align:center;">
                                        <input type="checkbox" id="aa-cb-all" onchange="aaToggleVisible(this.checked)">
                                    </th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>No. HP</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_customers']->value, 'cust');
$_smarty_tpl->tpl_vars['cust']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cust']->value) {
$_smarty_tpl->tpl_vars['cust']->do_else = false;
?>
                                <tr class="aa-row <?php if ($_smarty_tpl->tpl_vars['cust']->value['is_assigned']) {?>success<?php }?>"
                                    data-name="<?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['cust']->value['fullname'], 'UTF-8');?>
"
                                    data-username="<?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['cust']->value['username'], 'UTF-8');?>
"
                                    data-phone="<?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['cust']->value['phonenumber'], 'UTF-8');?>
">
                                    <td style="text-align:center;vertical-align:middle;">
                                        <input type="checkbox" class="aa-cb"
                                            name="customer_ids[]"
                                            value="<?php echo $_smarty_tpl->tpl_vars['cust']->value['id'];?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['cust']->value['is_assigned']) {?>checked<?php }?>>
                                    </td>
                                    <td style="vertical-align:middle;">
                                        <strong><?php echo $_smarty_tpl->tpl_vars['cust']->value['fullname'];?>
</strong>
                                        <?php if ($_smarty_tpl->tpl_vars['cust']->value['is_assigned']) {?>
                                        <span class="label label-success" style="margin-left:4px;">assigned</span>
                                        <?php }?>
                                    </td>
                                    <td style="vertical-align:middle;"><?php echo $_smarty_tpl->tpl_vars['cust']->value['username'];?>
</td>
                                    <td style="vertical-align:middle;"><?php echo $_smarty_tpl->tpl_vars['cust']->value['phonenumber'];?>
</td>
                                    <td style="vertical-align:middle;">
                                        <?php if ($_smarty_tpl->tpl_vars['cust']->value['status'] == 'Active') {?>
                                        <span class="label label-success">Active</span>
                                        <?php } else { ?>
                                        <span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['cust']->value['status'];?>
</span>
                                        <?php }?>
                                    </td>
                                </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                    <div style="margin-top:12px;">
                        <button type="submit" class="btn btn-success"
                            onclick="return confirm('Simpan? Customer yang tidak dicentang akan dilepas dari agent ini.')">
                            <i class="fa fa-save"></i> Simpan
                            (<span id="aa-btn-count"><?php echo $_smarty_tpl->tpl_vars['assigned_count']->value;?>
</span> customer)
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
(function () {
    var filterIn = document.getElementById('aa-filter');
    var rows     = Array.from(document.querySelectorAll('#aa-table tbody tr.aa-row'));
    var visEl    = document.getElementById('aa-visible');
    var selEl    = document.getElementById('selected-count');
    var btnEl    = document.getElementById('aa-btn-count');

    function updateCounts() {
        var vis = rows.filter(function(r){ return r.style.display !== 'none'; }).length;
        var sel = document.querySelectorAll('.aa-cb:checked').length;
        if (visEl) visEl.textContent = vis;
        if (selEl) selEl.textContent = sel + ' dipilih';
        if (btnEl) btnEl.textContent = sel;
    }

    filterIn.addEventListener('input', function () {
        var q = filterIn.value.toLowerCase().trim();
        rows.forEach(function (tr) {
            var ok = !q ||
                tr.getAttribute('data-name').indexOf(q) !== -1 ||
                tr.getAttribute('data-username').indexOf(q) !== -1 ||
                tr.getAttribute('data-phone').indexOf(q) !== -1;
            tr.style.display = ok ? '' : 'none';
        });
        updateCounts();
    });

    document.querySelectorAll('.aa-cb').forEach(function (cb) {
        cb.addEventListener('change', function () {
            cb.closest('tr').className = 'aa-row' + (cb.checked ? ' success' : '');
            updateCounts();
        });
    });

    window.aaToggleVisible = function (checked) {
        rows.forEach(function (tr) {
            if (tr.style.display !== 'none') {
                var cb = tr.querySelector('.aa-cb');
                if (cb) { cb.checked = checked; tr.className = 'aa-row' + (checked ? ' success' : ''); }
            }
        });
        updateCounts();
    };
    window.aaSelectAll   = function () { document.getElementById('aa-cb-all').checked = true;  aaToggleVisible(true); };
    window.aaDeselectAll = function () { document.getElementById('aa-cb-all').checked = false; aaToggleVisible(false); };

    updateCounts();
})();
<?php echo '</script'; ?>
>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
