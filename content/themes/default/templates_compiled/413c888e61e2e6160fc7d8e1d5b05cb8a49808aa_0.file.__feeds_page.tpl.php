<?php
/* Smarty version 3.1.31, created on 2017-12-27 17:06:19
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43d30b4e2736_40328473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '413c888e61e2e6160fc7d8e1d5b05cb8a49808aa' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_page.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a43d30b4e2736_40328473 (Smarty_Internal_Template $_smarty_tpl) {
if (!($_smarty_tpl->tpl_vars['_tpl']->value == "profile_pages" || $_smarty_tpl->tpl_vars['_tpl']->value == "list")) {?>
    <li class="col-md-3 col-sm-6">
        <div class="box">
            <a class="box-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];?>
" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
');"></a>
            <div class="box-content">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];?>
" class="title">
                    <?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>

                    <?php if ($_smarty_tpl->tpl_vars['_page']->value['page_verified']) {?>
                    <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                    <?php }?>
                </a>
                <div class="text clearfix">
                    <div class="pull-right flip">
                        <?php if ($_smarty_tpl->tpl_vars['_page']->value['i_like']) {?>
                            <button type="button" class="btn btn-default js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
">
                                <i class="fa fa-thumbs-o-up"></i>
                                <?php echo __("Unlike");?>

                            </button>
                        <?php } else { ?>
                            <button type="button" class="btn btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
">
                                <i class="fa fa-thumbs-o-up"></i>
                                <?php echo __("Like");?>

                            </button>
                        <?php }?>
                    </div>
                    <div>
                        <?php echo $_smarty_tpl->tpl_vars['_page']->value['page_likes'];?>
 <?php echo __("Likes");?>

                    </div>
                </div>
            </div>
        </div>
    </li>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['_tpl']->value == "profile_pages") {?><li class="col-sm-12 col-md-6"><div class="data-container-wrapper"><?php } else { ?><li class="feeds-item"><?php }?>
        <div class="data-container <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>small<?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>">
                <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
">
            </a>
            <div class="data-content">
                <div class="pull-right flip">
                    <?php if ($_smarty_tpl->tpl_vars['_page']->value['i_like']) {?>
                    <button type="button" class="btn btn-default js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
">
                        <i class="fa fa-thumbs-o-up"></i>
                        <?php echo __("Unlike");?>

                    </button>
                    <?php } else { ?>
                    <button type="button" class="btn btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
">
                        <i class="fa fa-thumbs-o-up"></i>
                        <?php echo __("Like");?>

                    </button>
                    <?php }?>
                </div>
                <div>
                    <span class="name js_user-popover" data-uid="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
" data-type="page">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
</a>
                    </span>
                    <?php if ($_smarty_tpl->tpl_vars['_page']->value['page_verified']) {?>
                    <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                    <?php }?>
                    <div><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_likes'];?>
 <?php echo __("Likes");?>
</div>
                </div>
            </div>
        </div>
    <?php if ($_smarty_tpl->tpl_vars['_tpl']->value == "profile_pages") {?></div></li><?php } else { ?></li><?php }
}
}
}
