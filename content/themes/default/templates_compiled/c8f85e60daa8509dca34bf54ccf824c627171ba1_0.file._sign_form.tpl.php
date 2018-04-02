<?php
/* Smarty version 3.1.31, created on 2017-12-27 17:12:50
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_sign_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43d492bcacf5_26177585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8f85e60daa8509dca34bf54ccf824c627171ba1' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_sign_form.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_5a43d492bcacf5_26177585 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xs-12 col-sm-4 col-sm-offset-4">
    <div class="panel panel-login">
        <!-- signin -->
        <div class="panel-body <?php if ($_smarty_tpl->tpl_vars['do']->value == 'up') {?>x-hidden<?php }?>">
            <h4><?php echo __("Login");?>
</h4>
            <?php if ($_smarty_tpl->tpl_vars['highlight']->value) {?><div class="alert alert-warning" role="alert"><?php echo $_smarty_tpl->tpl_vars['highlight']->value;?>
</div><?php }?>
            <form class="js_ajax-forms" data-url="core/signin.php">
                <div class="form-group">
                    <input name="username_email" type="text" class="form-control" placeholder='<?php echo __("Email");?>
 <?php echo __("or");?>
 <?php echo __("Username");?>
' required>
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder='<?php echo __("Password");?>
' required>
                </div>
                <div class="checkbox checkbox-primary">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember"><?php echo __("Remember me");?>
</label>
                    | <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/reset"><?php echo __("Forgotten password?");?>
</a>
                </div>
                <button type="submit" class="btn btn-block btn-primary"><?php echo __("Login");?>
</button>

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled']) {?>
                    <div class="hr-heading mt5 mb10">
                        <div class="hr-heading-text">
                            <?php echo __("or");?>
 <?php echo __("login with");?>

                        </div>
                    </div>
                    <div class="text-center">
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook" class="btn btn-social-icon btn-facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter" class="btn btn-social-icon btn-twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google" class="btn btn-social-icon btn-google">
                                <i class="fa fa-google"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/instagram" class="btn btn-social-icon btn-instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/linkedin" class="btn btn-social-icon btn-linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/vkontakte" class="btn btn-social-icon btn-vk">
                                <i class="fa fa-vk"></i>
                            </a>
                        <?php }?>
                    </div>
                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['registration_enabled']) {?>
                <div class="mt20 text-center">
                    <?php echo __("Not registered?");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup" class="js_toggle-panel text-link"><?php echo __("Create an account");?>
</a>
                </div>
            <?php }?>
        </div>
        <!-- signin -->
        <!-- signup -->
        <div class="panel-body <?php if ($_smarty_tpl->tpl_vars['do']->value != 'up') {?>x-hidden<?php }?>">
            <h4><?php echo __("New to");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
! <?php echo __("Sign up");?>
</h4>
            <form class="js_ajax-forms" data-url="core/signup.php">
                <div class="form-group">
                    <input name="first_name" type="text" class="form-control" placeholder='<?php echo __("First name");?>
' required>
                </div>
                <div class="form-group">
                    <input name="last_name" type="text" class="form-control" placeholder='<?php echo __("Last name");?>
' required>
                </div>
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder='<?php echo __("Username");?>
' required>
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder='<?php echo __("Email");?>
' required>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['activation_enabled'] && $_smarty_tpl->tpl_vars['system']->value['activation_type'] == "sms") {?>
                    <div class="form-group">
                        <input name="phone" type="text" class="form-control" placeholder='<?php echo __("Phone number (eg. +905...)");?>
' required>
                    </div>
                <?php }?>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder='<?php echo __("Password");?>
' required>
                </div>
                <div class="js_hidden-section x-hidden">
                    <div class="form-group">
                        <label for="gender"><?php echo __("I am");?>
</label>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="none"><?php echo __("Select Sex");?>
:</option>
                            <option value="male"><?php echo __("Male");?>
</option>
                            <option value="female"><?php echo __("Female");?>
</option>
                        </select>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['age_restriction']) {?>
                        <div class="form-group">
                            <label><?php echo __("Birthdate");?>
</label>
                            <div class="row">
                                <div class="col-xs-4">
                                    <select class="form-control" name="birth_month">
                                        <option value="none"><?php echo __("Month");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo __("Jan");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo __("Feb");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo __("Mar");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo __("Apr");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo __("May");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo __("Jun");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo __("Jul");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo __("Aug");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo __("Sep");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo __("Oct");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo __("Nov");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo __("Dec");?>
</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control" name="birth_day">
                                        <option value="none"><?php echo __("Day");?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                        <?php }
}
?>

                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control" name="birth_year">
                                        <option value="none"><?php echo __("Year");?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2017+1 - (1905) : 1905-(2017)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1905, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                        <?php }
}
?>

                                    </select>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <!-- custom fields -->
                    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, false);
?>

                    <?php }?>
                    <!-- custom fields -->
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>
                        <div class="form-group">
                            <!-- reCAPTCHA -->
                            <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
"></div>
                            <!-- reCAPTCHA -->
                        </div>
                    <?php }?>
                    <p class="text-muted">
                        <?php echo __("By clicking Sign Up, you agree to our");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/terms"><?php echo __("Terms");?>
</a>
                    </p>
                </div>
                <button type="submit" class="btn btn-block btn-success"><?php echo __("Sign Up");?>
</button>

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
                    <div class="hr-heading mt5 mb10">
                        <div class="hr-heading-text">
                            <?php echo __("or");?>
 <?php echo __("register with");?>

                        </div>
                    </div>
                    <div class="text-center">
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook" class="btn btn-social-icon btn-facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter" class="btn btn-social-icon btn-twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google" class="btn btn-social-icon btn-google">
                                <i class="fa fa-google"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/instagram" class="btn btn-social-icon btn-instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/linkedin" class="btn btn-social-icon btn-linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/vkontakte" class="btn btn-social-icon btn-vk">
                                <i class="fa fa-vk"></i>
                            </a>
                        <?php }?>
                    </div>
                <?php }?>
            <?php }?>
            <div class="mt20 text-center"><?php echo __("Have an account?");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin" class="js_toggle-panel text-link"><?php echo __("Login Now");?>
</a></div>
        </div>
        <!-- signup -->
    </div>
</div><?php }
}
