<?php
/* Smarty version 4.5.3, created on 2026-04-15 19:56:22
  from '/var/www/html/phpnuxbill/ui/ui/customer/forgot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69df8af64611c6_54930583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '439b67431af832324b1812ad991e9fb1c925b8de' => 
    array (
      0 => '/var/www/html/phpnuxbill/ui/ui/customer/forgot.tpl',
      1 => 1763342386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:customer/header-public.tpl' => 1,
    'file:customer/footer-public.tpl' => 1,
  ),
),false)) {
function content_69df8af64611c6_54930583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:customer/header-public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="hidden-xs" style="height:100px"></div>
<form action="<?php echo Text::url('forgot&step=');
echo $_smarty_tpl->tpl_vars['step']->value+1;?>
" method="post">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>
                <div class="panel panel-primary">
                    <div class="panel-heading"><?php echo Lang::T('Verification Code');?>
</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="input-group">
                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {?>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                                <?php } else { ?>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <?php }?>
                                <input type="text" readonly class="form-control" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"
                                    placeholder="<?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {
echo $_smarty_tpl->tpl_vars['_c']->value['country_code_phone'];?>
 <?php echo Lang::T('Phone Number');
} else {
echo Lang::T('Usernames');
}?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
                                <input type="text" required class="form-control" id="otp_code"
                                    placeholder="<?php echo Lang::T('Verification Code');?>
" name="otp_code">
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-block btn-primary"><?php echo Lang::T('Validate');?>
</button>
                        <a href="<?php echo Text::url('forgot&step=-1');?>
" class="btn btn-block btn-link"><?php echo Lang::T('Cancel');?>
</a>
                    </div>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 2) {?>
                <div class="panel panel-primary">
                    <div class="panel-heading"><?php echo Lang::T('Success');?>
</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label><?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {
echo Lang::T('Phone Number');
} else {
echo Lang::T('Usernames');
}?></label>
                            <div class="input-group">
                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {?>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                                <?php } else { ?>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <?php }?>
                                <input type="text" readonly class="form-control" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"
                                    placeholder="<?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {
echo $_smarty_tpl->tpl_vars['_c']->value['country_code_phone'];?>
 <?php echo Lang::T('Phone Number');
} else {
echo Lang::T('Usernames');
}?>">
                            </div>
                        </div>
                        <label><?php echo Lang::T('Your Password has been change to');?>
</label>
                        <input type="text" readonly class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['passsword']->value;?>
" onclick="this.select()">
                        <p class="help-block">
                            <?php echo Lang::T('Use the password to login, and change the password from password change page');?>
</p>
                    </div>
                    <div class="panel-footer">
                        <a href="<?php echo Text::url('login');?>
" class="btn btn-block btn-primary"><?php echo Lang::T('Back');?>
</a>
                    </div>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 6) {?>
                <div class="panel panel-primary">
                    <div class="panel-heading"><?php echo Lang::T('Forgot Username');?>
</div>
                    <div class="panel-body">
                        <label><?php echo Lang::T('Please input your Email or Phone number');?>
</label>
                        <input type="text" name="find" class="form-control" required value="">
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-block btn-primary"><?php echo Lang::T('Validate');?>
</button>
                        <a href="<?php echo Text::url('forgot');?>
" class="btn btn-block btn-link"><?php echo Lang::T('Back');?>
</a>
                    </div>
                </div>
            <?php } else { ?>
                <div class="panel panel-primary">
                    <div class="panel-heading"><?php echo Lang::T('Forgot Password');?>
</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label><?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {
echo Lang::T('Phone Number');
} else {
echo Lang::T('Usernames');
}?></label>
                            <div class="input-group">
                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {?>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                                <?php } else { ?>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <?php }?>
                                <input type="text" class="form-control" name="username" required
                                    placeholder="<?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {
echo $_smarty_tpl->tpl_vars['_c']->value['country_code_phone'];?>
 <?php echo Lang::T('Phone Number');
} else {
echo Lang::T('Usernames');
}?>">
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-block btn-primary"><?php echo Lang::T('Validate');?>
</button>
                        <a href="<?php echo Text::url('forgot&step=6');?>
"
                            class="btn btn-block btn-link"><?php echo Lang::T('Forgot Usernames');?>
</a>
                        <a href="<?php echo Text::url('login');?>
" class="btn btn-block btn-link"><?php echo Lang::T('Back');?>
</a>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:customer/footer-public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
