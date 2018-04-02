<?php
/* Smarty version 3.1.31, created on 2017-12-27 16:43:04
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_js_templates.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43cd9887c2d1_53502265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53dd5cab1d1d707fc4bc8fc565b404077bcbaca4' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_js_templates.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_emoji-menu.tpl' => 4,
  ),
),false)) {
function content_5a43cd9887c2d1_53502265 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Modals --><div id="modal" class="modal fade"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="loader pt10 pb10"></div></div></div></div></div><?php echo '<script'; ?>
 id="modal-login" type="text/template"><div class="modal-header"><h5 class="modal-title"><?php echo __("Not Logged In");?>
</h5></div><div class="modal-body"><p><?php echo __("Please log in to continue");?>
</p></div><div class="modal-footer"><a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin"><?php echo __("Login");?>
</a></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="modal-message" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h5 class="modal-title">{{title}}</h5></div><div class="modal-body"><p>{{message}}</p></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="modal-success" type="text/template"><div class="modal-body text-center"><div class="big-icon success"><i class="fa fa-thumbs-o-up fa-3x"></i></div><h4>{{title}}</h4><p class="mt20">{{message}}</p></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="modal-error" type="text/template"><div class="modal-body text-center"><div class="big-icon error"><i class="fa fa-times fa-3x"></i></div><h4>{{title}}</h4><p class="mt20">{{message}}</p></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="modal-confirm" type="text/template"><div class="modal-header"><h5 class="modal-title">{{title}}</h5></div><div class="modal-body"><p>{{message}}</p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button><button type="button" class="btn btn-primary" id="modal-confirm-ok"><?php echo __("Confirm");?>
</button></div><?php echo '</script'; ?>
><!-- Modals --><!-- Translator --><?php echo '<script'; ?>
 id="translator" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h5 class="modal-title"><?php echo __("Select Your Language");?>
</h5></div><div class="modal-body"><div class="row"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system']->value['languages'], 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?><div class="col-xs-12 col-sm-6"><div class="translator-language js_translator" data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
"><span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['language']->value['flag_icon'];?>
"></span> <?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div><?php echo '</script'; ?>
><!-- Translator --><!-- Search --><?php echo '<script'; ?>
 id="search-for" type="text/template"><div class="ptb10 plr10"><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/{{#hashtag}}hashtag/{{/hashtag}}{{query}}"><i class="fa fa-search pr5"></i> <?php echo __("Search for");?>
 {{#hashtag}}#{{/hashtag}}{{query}}</a></div><?php echo '</script'; ?>
><!-- Search --><!-- Lightbox --><?php echo '<script'; ?>
 id="lightbox" type="text/template"><div class="lightbox"><div class="container lightbox-container"><div class="lightbox-preview"><div class="lightbox-next js_lightbox-slider"><i class="fa fa-chevron-right fa-3x"></i></div><div class="lightbox-prev js_lightbox-slider"><i class="fa fa-chevron-left fa-3x"></i></div><img alt="" class="img-responsive" src="{{image}}"></div><div class="lightbox-data"><div class="clearfix"><div class="pt5 pr5 pull-right flip"><button data-toggle="tooltip" data-placement="bottom" title='<?php echo __("Press Esc to close");?>
' type="button" class="close lightbox-close js_lightbox-close"><span aria-hidden="true">&times;</span></button></div></div><div class="lightbox-post"><div class="js_scroller js_scroller-lightbox" data-slimScroll-height="100%"><div class="loader mtb10"></div></div></div></div></div></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="lightbox-nodata" type="text/template"><div class="lightbox"><div class="container lightbox-container"><div class="lightbox-preview nodata"><img alt="" class="img-responsive" src="{{image}}"></div></div></div><?php echo '</script'; ?>
><!-- Lightbox --><!-- Payments --><?php echo '<script'; ?>
 id="payment" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Select Your Payment Method");?>
</h5></div><div class="modal-body text-center"><?php if ($_smarty_tpl->tpl_vars['system']->value['paypal_enabled']) {?><button class="js_payment-paypal btn btn-default btn-lg mr10" data-id="{{id}}" data-price="{{price}}" data-name="{{name}}" data-img="{{img}}" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> <?php echo __('Loading');?>
"><i class="fa fa-paypal"></i> <?php echo __("Paypal");?>
</button><?php }
if ($_smarty_tpl->tpl_vars['system']->value['creditcard_enabled']) {?><button class="js_payment-stripe btn btn-default btn-lg mr10" data-id="{{id}}" data-price="{{price}}" data-name="{{name}}" data-img="{{img}}" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> <?php echo __('Loading');?>
" data-method="credit"><i class="fa fa-credit-card"></i> <?php echo __("Credit Card");?>
</button><?php }
if ($_smarty_tpl->tpl_vars['system']->value['alipay_enabled']) {?><button class="js_payment-stripe btn btn-default btn-lg mr10" data-id="{{id}}" data-price="{{price}}" data-name="{{name}}" data-img="{{img}}" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> <?php echo __('Loading');?>
" data-method="alipay"><i class="fa fa-credit-card"></i> <?php echo __("Alipay");?>
</button><?php }
if ($_smarty_tpl->tpl_vars['system']->value['bitcoin_enabled']) {?><button class="js_payment-stripe btn btn-default btn-lg" data-id="{{id}}" data-price="{{price}}" data-name="{{name}}" data-img="{{img}}" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> <?php echo __('Loading');?>
" data-method="bitcoin"><i class="fa fa-bitcoin"></i> <?php echo __("Bitcoin");?>
</button><?php }?></div><?php echo '</script'; ?>
><!-- Payments --><?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?><!-- Forget Password --><?php echo '<script'; ?>
 id="forget-password-confirm" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h5 class="modal-title"><?php echo __("Check Your Email");?>
</h5></div><form class="js_ajax-forms" data-url="core/forget_password_confirm.php"><div class="modal-body"><div class="mb20"><?php echo __("Check your email");?>
 - <?php echo __("We sent you an email with a six-digit confirmation code. Enter it below to continue to reset your password");?>
.</div><div class="row"><div class="col-md-6"><div class="form-group"><input name="reset_key" type="text" class="form-control" placeholder="######" required autofocus></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="col-md-6"><label class="mb0"><?php echo __("We sent your code to");?>
</label> {{email}}</div></div></div><div class="modal-footer"><input name="email" type="hidden" value="{{email}}"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="forget-password-reset" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Change Your Password!");?>
</h5></div><form class="js_ajax-forms" data-url="core/forget_password_reset.php"><div class="modal-body"><div class="form-group"><label for="password"><?php echo __("New Password");?>
</label><input name="password" id="password" type="password" class="form-control" required autofocus></div><div class="form-group"><label for="confirm"><?php echo __("Confirm Password");?>
</label><input name="confirm" id="confirm" type="password" class="form-control" required></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><input name="email" type="hidden" value="{{email}}"><input name="reset_key" type="hidden" value="{{reset_key}}"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><!-- Forget Password --><?php } else { ?><!-- Email Activation --><?php echo '<script'; ?>
 id="activation-email-reset" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Change Email Address");?>
</h5></div><form class="js_ajax-forms" data-url="core/activation_email_reset.php"><div class="modal-body"><div class="form-group"><label><?php echo __("Current Email");?>
</label><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
</p></div><div class="form-group"><label for="email"><?php echo __("New Email");?>
</label><input name="email" id="email" type="email" class="form-control" required autofocus></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><!-- Email Activation --><!-- Phone Activation --><?php echo '<script'; ?>
 id="activation-phone" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Enter the code from the SMS message");?>
</h5></div><form class="js_ajax-forms" data-url="core/activation_phone_confirm.php"><div class="modal-body"><div class="mb20"><?php echo __("Let us know if this mobile number belongs to you. Enter the code in the SMS");?>
</div><div class="row"><div class="col-md-6"><div class="form-group"><input name="token" type="text" class="form-control" placeholder="######" required autofocus><?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_phone']) {?><span class="help-block"><span class="text-link" data-toggle="modal" data-url="core/activation_phone_resend.php"><?php echo __("Resend SMS");?>
</span></span><?php }?></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="col-md-6"><?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_phone']) {?><label class="mb0"><?php echo __("We sent your code to");?>
</label> <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_phone'];
}?></div></div></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="activation-phone-reset" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Change Phone Number");?>
</h5></div><form class="js_ajax-forms" data-url="core/activation_phone_reset.php"><div class="modal-body"><?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_phone']) {?><div class="form-group"><label><?php echo __("Current Phone");?>
</label><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_phone'];?>
</p></div><?php }?><div class="form-group"><label for="phone"><?php echo __("New Phone");?>
</label><input name="phone" id="phone" type="text" class="form-control" required autofocus><span class="help-block"><?php echo __("For example");?>
: +12344567890</span></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Continue");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><!-- Phone Activation --><!-- x-uploader -->
    <?php echo '<script'; ?>
 id="x-uploader" type="text/template">
        <form class="x-uploader" action="{{url}}" method="post" enctype="multipart/form-data">
            {{#multiple}}
            <input name="file[]" type="file" multiple="multiple">
            {{/multiple}}
            {{^multiple}}
            <input name="file" type="file">
            {{/multiple}}
            <input type="hidden" name="secret" value="{{secret}}">
        </form>
    <?php echo '</script'; ?>
>
    <!-- x-uploader --><!-- Publisher --><?php echo '<script'; ?>
 id="publisher-attachments-item" type="text/template"><li class="item deletable" data-src="{{src}}"><img alt="" src="{{image_path}}"><button type="button" class="close js_publisher-attachment-remover" title='<?php echo __("Remove");?>
'><span>&times;</span></button></li><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="comment-attachments-item" type="text/template"><li class="item deletable" data-src="{{src}}"><img alt="" src="{{image_path}}"><button type="button" class="close js_comment-attachment-remover" title='<?php echo __("Remove");?>
'><span>&times;</span></button></li><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="chat-attachments-item" type="text/template"><li class="item deletable" data-src="{{src}}"><img alt="" src="{{image_path}}"><button type="button" class="close js_chat-attachment-remover" title='<?php echo __("Remove");?>
'><span>&times;</span></button></li><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="scraper-media" type="text/template"><div class="publisher-scraper-remover js_publisher-scraper-remover"><button type="button" class="close"><span>&times;</span></button></div><div class="post-media"><div class="embed-responsive embed-responsive-16by9">{{{html}}}</div><div class="post-media-meta"><a class="title mb5" href="{{url}}" target="_blank">{{title}}</a><div class="text mb5">{{text}}</div><div class="source">{{provider}}</div></div></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="scraper-photo" type="text/template"><div class="publisher-scraper-remover js_publisher-scraper-remover"><button type="button" class="close"><span>&times;</span></button></div><div class="post-media"><div class="post-media-image"><div style="background-image:url('{{url}}');"></div></div><div class="post-media-meta"><div class="source">{{provider}}</div></div></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="scraper-link" type="text/template"><div class="publisher-scraper-remover js_publisher-scraper-remover"><button type="button" class="close"><span>&times;</span></button></div><div class="post-media">{{#thumbnail}}<div class="post-media-image"><div style="background-image:url('{{thumbnail}}');"></div></div>{{/thumbnail}}<div class="post-media-meta"><a class="title mb5" href="{{url}}" target="_blank">{{title}}</a><div class="text mb5">{{text}}</div><div class="source">{{host}}</div></div></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="poll-option" type="text/template"><div class="publisher-meta" data-meta="poll"><i class="fa fa-plus fa-fw"></i><input type="text" placeholder='<?php echo __("Add an option");?>
...'></div><?php echo '</script'; ?>
><!-- Publisher --><!-- Edit (Posts|Comments) --><?php echo '<script'; ?>
 id="edit-post" type="text/template"><div class="post-edit"><div class="x-form comment-form"><textarea rows="2" class="js_autosize js_mention js_update-post">{{text}}</textarea><div class="x-form-tools"><div class="x-form-tools-emoji js_emoji-menu-toggle"><i class="fa fa-smile-o fa-lg"></i></div><?php $_smarty_tpl->_subTemplateRender('file:_emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div></div><small class="text-link js_unedit-post"><?php echo __("Cancel");?>
</small></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="edit-comment" type="text/template"><div class="comment-edit"><div class="x-form comment-form"><textarea rows="1" class="js_autosize js_mention js_update-comment">{{text}}</textarea><div class="x-form-tools"><div class="x-form-tools-attach"><i class="fa fa-camera js_x-uploader" data-handle="comment"></i></div><div class="x-form-tools-emoji js_emoji-menu-toggle"><i class="fa fa-smile-o fa-lg"></i></div><?php $_smarty_tpl->_subTemplateRender('file:_emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><div class="comment-attachments attachments clearfix x-hidden"><ul><li class="loading"><div class="loader loader_small"></div></li></ul></div><small class="text-link js_unedit-comment"><?php echo __("Cancel");?>
</small></div><?php echo '</script'; ?>
><!-- Edit (Posts|Comments) --><!-- Hidden (Posts|Authors) --><?php echo '<script'; ?>
 id="hidden-post" type="text/template"><div class="post flagged" data-id="{{id}}"><div class="text-semibold mb5"><?php echo __("Post Hidden");?>
</div><?php echo __("This post will no longer appear to you");?>
 <span class="text-link js_unhide-post"><?php echo __("Undo");?>
</span></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="hidden-author" type="text/template"><div class="post flagged" data-id="{{id}}"><?php echo __("You won't see posts from");?>
 {{name}} <?php echo __("in News Feed anymore");?>
. <span class="text-link js_unhide-author" data-author-id="{{uid}}" data-author-name="{{name}}"><?php echo __("Undo");?>
</span></div><?php echo '</script'; ?>
><!-- Hidden (Posts|Authors) --><!-- Chat --><?php if ($_smarty_tpl->tpl_vars['system']->value['chat_enabled']) {?><div class="chat-sidebar js_chat-widget-master"><div class="chat-sidebar-content <?php if (!$_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled']) {?>chat-sidebar-disabled<?php }?>"><div class="js_scroller" data-slimScroll-height="100%"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['online_friends']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?><li class="feeds-item"><div class="data-container clickable small js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
"><img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
"><div class="data-content"><div class="pull-right flip"><i class="fa fa-circle chat-sidebar-online"></i></div><div><strong><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
</strong></div></div></div></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div></div><div class="chat-sidebar-head"><div class="input-group input-group-sm dropup"><input type="text" class="chat-sidebar-filter form-control" placeholder='<?php echo __("Search");?>
'><div class="input-group-btn"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i></button><ul class="dropdown-menu dropdown-menu-right dropdown-menu-checkbox"><li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/blocking"><i class="fa fa-ban"></i><?php echo __("Manage Blocking");?>
</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/privacy"><i class="fa fa-shield"></i><?php echo __("Privacy Settings");?>
</a></li><li role="separator" class="divider"></li><li class="dropdown-item-checkbox <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled']) {?>checked<?php }?>" data-param="privacy_chat"><a href="#"><?php echo __("Chat");?>
</a></li></ul></div></div></div></div><div class="chat-widget js_chat-widget-master"><?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled']) {?><div class="chat-widget-head"><div class="chat-head-title"><i class="fa fa-circle"></i><?php echo __("Chat");?>
 (<?php echo count($_smarty_tpl->tpl_vars['online_friends']->value);?>
)</div></div><div class="chat-widget-content"><div class="js_scroller"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['online_friends']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?><li class="feeds-item"><div class="data-container clickable small js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
"><img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
"><div class="data-content"><div><strong><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
</strong></div></div></div></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div><div class="x-form chat-form"><div class="chat-form-message"><input type="text" class="form-control" placeholder='<?php echo __("Search");?>
'></div></div></div><?php } else { ?><div class="chat-widget-content"><div class="js_scroller"></div></div><div class="chat-widget-head"><div class="chat-head-title"><i class="fa fa-user-secret"></i><?php echo __("Offline");?>
</div></div><?php }?></div><?php }
echo '<script'; ?>
 id="chat-box-new" type="text/template"><div class="chat-widget chat-box fresh opened"><div class="chat-widget-head"><div class="chat-head-title"><?php echo __("New Message");?>
</div><div class="chat-head-close"><button type="button" class="close js_chat-box-close" title='<?php echo __("Close");?>
'><span aria-hidden="true">&times;</span></button></div></div><div class="chat-widget-content"><div class="chat-conversations js_scroller"></div><div class="chat-to clearfix js_autocomplete"><div class="to"><?php echo __("To");?>
:</div><ul class="tags"></ul><div class="typeahead"><input type="text" size="1" autofocus></div></div><div class="chat-attachments attachments clearfix x-hidden"><ul><li class="loading"><div class="loader loader_small"></div></li></ul></div><div class="x-form chat-form x-visible"><div class="chat-form-message"><textarea class="js_autosize  js_post-message" dir="auto" rows="1" placeholder='<?php echo __("Write a message");?>
'></textarea></div><div class="x-form-tools"><div class="x-form-tools-attach"><i class="fa fa-camera js_x-uploader" data-handle="chat"></i></div><div class="x-form-tools-emoji js_emoji-menu-toggle"><i class="fa fa-smile-o fa-lg"></i></div><?php $_smarty_tpl->_subTemplateRender('file:_emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div></div></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="chat-box" type="text/template"><div class="chat-widget chat-box opened" id="{{chat_key_value}}" data-uid="{{ids}}" {{#conversation_id}}data-cid="{{conversation_id}}"{{/conversation_id}}><div class="chat-widget-head"><div class="chat-head-title">{{^multiple}}<i class="fa fa-user-secret js_chat-box-status"></i>{{/multiple}}<span title="{{name_list}}">{{name}}</span></div><div class="chat-head-label"><span class="label label-danger js_chat-box-label"></span></div><div class="chat-head-close"><button type="button" class="close js_chat-box-close" title='<?php echo __("Close");?>
'><span>&times;</span></button></div></div><div class="chat-widget-content"><div class="chat-conversations js_scroller"><ul></ul></div><div class="chat-attachments attachments clearfix x-hidden"><ul><li class="loading"><div class="loader loader_small"></div></li></ul></div><div class="x-form chat-form"><div class="chat-form-message"><textarea class="js_autosize  js_post-message" dir="auto" rows="1" placeholder='<?php echo __("Write a message");?>
'></textarea></div><div class="x-form-tools"><div class="x-form-tools-attach"><i class="fa fa-camera js_x-uploader" data-handle="chat"></i></div><div class="x-form-tools-emoji js_emoji-menu-toggle"><i class="fa fa-smile-o fa-lg"></i></div><?php $_smarty_tpl->_subTemplateRender('file:_emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div></div></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="chat-message" type="text/template"><li><div class="conversation clearfix right" id="{{id}}"><div class="conversation-user"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
"></div><div class="conversation-body"><div class="text">{{{message}}}{{#image}}<span class="text-link js_lightbox-nodata {{#message}}mt5{{/message}}" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/{{image}}"><img alt="" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/{{image}}"></span>{{/image}}</div><div class="time js_moment" data-time="{{time}}">{{time}}</div></div></div></li><?php echo '</script'; ?>
><!-- Chat --><!-- DayTime Messages --><?php echo '<script'; ?>
 id="message-morning" type="text/template"><div class="panel daytime_message"><button type="button" class="close pull-right flip js_daytime-remover"><span>&times;</span></button><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/good_morning.png"><strong><?php echo __("Good Morning");?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
</strong></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="message-afternoon" type="text/template"><div class="panel daytime_message"><button type="button" class="close pull-right flip js_daytime-remover"><span>&times;</span></button><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/good_afternoon.png"><strong><?php echo __("Good Afternoon");?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
</strong></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="message-evening" type="text/template"><div class="panel daytime_message"><button type="button" class="close pull-right flip js_daytime-remover"><span>&times;</span></button><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/good_night.png"><strong><?php echo __("Good Evening");?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
</strong></div><?php echo '</script'; ?>
><!-- DayTime Messages --><!-- Pages & Groups & Events --><?php echo '<script'; ?>
 id="create-page" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Create New Page");?>
</h5></div><form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=page&do=create"><div class="modal-body"><div class="form-group"><label for="title"><?php echo __("Name Your Page");?>
</label><input type="text" class="form-control" name="title" id="title"></div><div class="form-group"><label for="username"><?php echo __("Web Address");?>
</label><div class="input-group"><span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/</span><input type="text" class="form-control" name="username" id="username"></div></div><div class="form-group"><label for="category"><?php echo __("Category");?>
</label><select class="form-control" name="category" id="category"><option><?php echo __("Select Category");?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><div class="form-group"><label for="description"><?php echo __("About");?>
</label><textarea class="form-control" name="description" name="description"></textarea></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="create-group" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Create New Group");?>
</h5></div><form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=group&do=create"><div class="modal-body"><div class="form-group"><label for="title"><?php echo __("Name Your Group");?>
</label><input type="text" class="form-control" name="title" id="title"></div><div class="form-group"><label for="username"><?php echo __("Web Address");?>
</label><div class="input-group"><span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/</span><input type="text" class="form-control" name="username" id="username"></div></div><div class="form-group"><label for="privacy"><?php echo __("Select Privacy");?>
</label><select class="form-control selectpicker" name="privacy"><option value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b><?php echo __('Public Group');?>
</b><br><?php echo __('Anyone can see the group, its members and their posts');?>
.</div></div>"><?php echo __("Public Group");?>
</option><option value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-2x'></i></div><div class='text'><b><?php echo __('Closed Group');?>
</b><br><?php echo __('Only members can see posts');?>
.</div></div>"><?php echo __("Closed Group");?>
</option><option value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b><?php echo __('Secret Group');?>
</b><br><?php echo __('Only members can find the group and see posts');?>
.</div></div>"><?php echo __("Secret Group");?>
</option></select></div><div class="form-group"><label for="description"><?php echo __("About");?>
</label><textarea class="form-control" name="description"></textarea></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><?php echo '<script'; ?>
 id="create-event" type="text/template"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h5 class="modal-title"><?php echo __("Create New Event");?>
</h5></div><form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=event&do=create"><div class="modal-body"><div class="form-group"><label for="title"><?php echo __("Name Your Event");?>
</label><input type="text" class="form-control" name="title" id="title"></div><div class="form-group"><label for="location"><?php echo __("Location");?>
</label><input type="text" class="form-control" name="location" id="location"></div><div class="form-group"><label><?php echo __("Start Date");?>
</label><div class='input-group date js_datetimepicker'><input type='text' class="form-control" name="start_date" /><span class="input-group-addon"><span class="fa fa-calendar"></span></span></div></div><div class="form-group"><label><?php echo __("End Date");?>
</label><div class='input-group date js_datetimepicker'><input type='text' class="form-control" name="end_date" /><span class="input-group-addon"><span class="fa fa-calendar"></span></span></div></div><div class="form-group"><label for="privacy"><?php echo __("Select Privacy");?>
</label><select class="form-control selectpicker" name="privacy"><option value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b><?php echo __('Public Event');?>
</b><br><?php echo __('Anyone can see the event, its users and posts');?>
.</div></div>"><?php echo __("Public Event");?>
</option><option value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-2x'></i></div><div class='text'><b><?php echo __('Closed Event');?>
</b><br><?php echo __('Only event users can see posts');?>
.</div></div>"><?php echo __("Closed Event");?>
</option><option value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b><?php echo __('Secret Event');?>
</b><br><?php echo __('Only invited users and event users can find the event');?>
.</div></div>"><?php echo __("Secret Event");?>
</option></select></div><div class="form-group"><label for="category"><?php echo __("Category");?>
</label><select class="form-control" name="category" id="category"><option><?php echo __("Select Category");?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><div class="form-group"><label for="description"><?php echo __("About");?>
</label><textarea class="form-control" name="description"></textarea></div><!-- error --><div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div><!-- error --></div><div class="modal-footer"><button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button></div></form><?php echo '</script'; ?>
><!-- Pages & Groups & Events --><!-- Noty Notification --><?php echo '<script'; ?>
 id="noty-notification" type="text/template"><div class="data-container small"><img class="data-avatar" src="{{image}}"><div class="data-content">{{message}}</div></div><?php echo '</script'; ?>
><!-- Noty Notification --><?php }
}
}
