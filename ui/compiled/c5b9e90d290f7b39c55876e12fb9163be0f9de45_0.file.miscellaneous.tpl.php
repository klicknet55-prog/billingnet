<?php
/* Smarty version 4.5.3, created on 2026-04-18 00:51:26
  from 'F:\xampp\htdocs\billingnet\ui\ui\admin\settings\miscellaneous.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69e2731ecb4cb7_21226412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5b9e90d290f7b39c55876e12fb9163be0f9de45' => 
    array (
      0 => 'F:\\xampp\\htdocs\\billingnet\\ui\\ui\\admin\\settings\\miscellaneous.tpl',
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
function content_69e2731ecb4cb7_21226412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="form-horizontal" method="post" role="form" action="" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-primary panel-hovered panel-stacked mb30">
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-xs" title="save" name="save" value="save" type="submit"><span
                                class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
                    </div>
                    <?php echo Lang::T('Miscellaneous');?>

                </div>
                <div class="panel-body">
                    <input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>
">
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('New Version Notification');?>
</label>
                        <div class="col-md-5">
                            <select name="new_version_notify" id="new_version_notify" class="form-control">
                                <option value="enable" <?php if ($_smarty_tpl->tpl_vars['_c']->value['new_version_notify'] == 'enable') {?>selected="selected"
                                    <?php }?>>
                                    <?php echo Lang::T('Enabled');?>

                                </option>
                                <option value="disable" <?php if ($_smarty_tpl->tpl_vars['_c']->value['new_version_notify'] == 'disable') {?>selected="selected"
                                    <?php }?>>
                                    <?php echo Lang::T('Disabled');?>

                                </option>
                            </select>
                        </div>
                        <p class="help-block col-md-4"><small>
                                <?php echo Lang::T('This is to notify you when new updates is
                                available');?>
</small>
                        </p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('Router Check');?>
</label>
                        <div class="col-md-5">
                            <select name="router_check" id="router_check" class="form-control">
                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['_c']->value['router_check'] == '0') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('Disabled');?>

                                </option>
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['_c']->value['router_check'] == '1') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('Enabled');?>

                                </option>
                            </select>
                        </div>
                        <p class="help-block col-md-4"><small>
                                <?php echo Lang::T('If enabled, the system will notify Admin when router goes Offline,
                                If admin
                                have 10 or more router and many customers, it will get overlapping, you can
                                disabled');?>

                            </small>
                        </p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('Phone OTP Required');?>
</label>
                        <div class="col-md-5">
                            <select name="allow_phone_otp" id="allow_phone_otp" class="form-control">
                                <option value="no" <?php if ($_smarty_tpl->tpl_vars['_c']->value['allow_phone_otp'] == 'no') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('No');?>
</option>
                                <option value="yes" <?php if ($_smarty_tpl->tpl_vars['_c']->value['allow_phone_otp'] == 'yes') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('Yes');?>

                                </option>
                            </select>
                        </div>
                        <p class="help-block col-md-4"><small>
                                <?php echo Lang::T('OTP is required when user want to change phone number and
                                registration');?>
</small>
                        </p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('OTP Method');?>
</label>
                        <div class="col-md-5">
                            <select name="phone_otp_type" id="phone_otp_type" class="form-control">
                                <option value="sms" <?php if ($_smarty_tpl->tpl_vars['_c']->value['phone_otp_type'] == 'sms') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('By SMS');?>

                                <option value="whatsapp" <?php if ($_smarty_tpl->tpl_vars['_c']->value['phone_otp_type'] == 'whatsapp') {?>selected="selected"
                                    <?php }?>>
                                    <?php echo Lang::T('by WhatsApp');?>

                                <option value="both" <?php if ($_smarty_tpl->tpl_vars['_c']->value['phone_otp_type'] == 'both') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('By WhatsApp and SMS');?>

                                </option>
                            </select>
                        </div>
                        <p class="help-block col-md-4"><small><?php echo Lang::T('The method which OTP will be sent to
                                user');?>
<br>
                                <?php echo Lang::T('For Registration and Update Phone Number');?>
</small></p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('Email OTP Required');?>
</label>
                        <div class="col-md-5">
                            <select name="allow_email_otp" id="allow_email_otp" class="form-control">
                                <option value="no" <?php if ($_smarty_tpl->tpl_vars['_c']->value['allow_email_otp'] == 'no') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('No');?>
</option>
                                <option value="yes" <?php if ($_smarty_tpl->tpl_vars['_c']->value['allow_email_otp'] == 'yes') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('Yes');?>

                                </option>
                            </select>
                        </div>
                        <p class="help-block col-md-4"><small>
                                <?php echo Lang::T('OTP is required when user want to change Email Address');?>

                            </small>
                        </p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('Show Bandwidth Plan');?>
</label>
                        <div class="col-md-5">
                            <select name="show_bandwidth_plan" id="show_bandwidth_plan" class="form-control">
                                <option value="no" <?php if ($_smarty_tpl->tpl_vars['_c']->value['show_bandwidth_plan'] == 'no') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('No');?>
</option>
                                <option value="yes" <?php if ($_smarty_tpl->tpl_vars['_c']->value['show_bandwidth_plan'] == 'yes') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('Yes');?>
</option>
                            </select>
                        </div>
                        <p class="help-block col-md-4"><small>
                                <?php echo Lang::T('Display bandwidth plan for customer');?>
</small></p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('Hotspot Auth Method');?>
</label>
                        <div class="col-md-5">
                            <select name="hs_auth_method" id="auth_method" class="form-control">
                                <option value="api" <?php if ($_smarty_tpl->tpl_vars['_c']->value['hs_auth_method'] == 'api') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('Api');?>

                                </option>
                                <option value="hchap" <?php if ($_smarty_tpl->tpl_vars['_c']->value['hs_auth_method'] == 'hchap') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('Http-Chap');?>

                                </option>
                            </select>
                        </div>
                        <p class="help-block col-md-4"><small>
                                <?php echo Lang::T('Hotspot Authentication Method. Make sure you have changed your
                                hotspot login
                                page.');?>
 <a href="https://github.com/agstrxyz/phpnuxbill-login-hotspot"
                                    target="_blank">Download
                                    phpnuxbill-login-hotspot</a></small>
                        </p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('Radius Rest Interim-Update');?>
</label>
                        <div class="col-md-5">
                            <input type="number" class="form-control" id="frrest_interim_update" name="frrest_interim_update"
                                value="<?php if ($_smarty_tpl->tpl_vars['_c']->value['frrest_interim_update']) {
echo $_smarty_tpl->tpl_vars['_c']->value['frrest_interim_update'];
} else { ?>0<?php }?>">
                        </div>
                        <p class="help-block col-md-4"><small>
                                <?php echo Lang::T('in minutes, leave 0 to disable this feature.');?>
</small>
                        </p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('Check if Customer Online');?>
</label>
                        <div class="col-md-5">
                            <select name="check_customer_online" id="check_customer_online" class="form-control">
                                <option value="no">
                                    <?php echo Lang::T('No');?>

                                </option>
                                <option value="yes" <?php if ($_smarty_tpl->tpl_vars['_c']->value['check_customer_online'] == 'yes') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('Yes');?>

                                </option>
                            </select>
                        </div>
                        <p class="help-block col-md-4"><small>
                                <?php echo Lang::T('This will show is Customer currently is online or not');?>
</small>
                        </p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('Extend Package Expiry');?>
</label>
                        <div class="col-md-5">
                            <select name="extend_expiry" id="extend_expiry" class="form-control">
                                <option value="yes" <?php if ($_smarty_tpl->tpl_vars['_c']->value['extend_expiry'] != 'no') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('Yes');?>
</option>
                                <option value="no" <?php if ($_smarty_tpl->tpl_vars['_c']->value['extend_expiry'] == 'no') {?>selected="selected" <?php }?>>
                                    <?php echo Lang::T('No');?>
</option>
                            </select>
                        </div>
                        <p class="help-block col-md-4">
                            <small> <?php echo Lang::T('If user buy same internet plan, expiry date will
                                extend');?>
</small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="form-group">
                    <button class="btn btn-success btn-block" name="save" value="save" type="submit">
                        <?php echo Lang::T('Save Changes');?>

                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
