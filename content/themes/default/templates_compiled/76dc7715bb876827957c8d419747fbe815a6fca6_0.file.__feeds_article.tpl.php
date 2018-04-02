<?php
/* Smarty version 3.1.31, created on 2017-12-27 17:02:45
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43d23586f3d2_92888296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76dc7715bb876827957c8d419747fbe815a6fca6' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_article.tpl',
      1 => 1514394162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a43d23586f3d2_92888296 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/admin/web/sngine.hplus.su/public_html/includes/libs/Smarty/plugins/modifier.truncate.php';
?>
<div class="col-sm-4 col-md-3">
    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="blog-container">
        <div class="blog-image">
            <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
">
        </div>
        <div class="blog-content">
            <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
</h3>
            <div class="text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['article']['text_snippet'],400);?>
</div>
            <object><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_blog_url'];?>
">
	    <div>
                <div class="post-avatar">
                    <div class="post-avatar-picture small rounded" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_picture'];?>
');">
                    </div>
                </div>
                <div class="post-meta">
                    <span class="text-link">
                        <?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_name'];?>

                    </span>
                    <div class="post-time">
                        <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
</span>
                    </div>
                </div>
            </div>
	    </a></object>
        </div>
<!--        <div class="blog-more">
            <span><?php echo __("More");?>
</span>
        </div> -->
	</a>
</div>
<?php }
}
