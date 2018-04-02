<?php
/* Smarty version 3.1.31, created on 2017-12-27 16:50:51
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_posts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43cf6bba6901_44943263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36a39ddc5b5599aaa37b67e184376bd975e4f05b' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_posts.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
),false)) {
function content_5a43cf6bba6901_44943263 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- posts-filter -->
<div class="posts-filter">
    <span><?php if ($_smarty_tpl->tpl_vars['_title']->value) {
echo $_smarty_tpl->tpl_vars['_title']->value;
} else {
echo __("Recent Updates");
}?></span>
    <?php if (!$_smarty_tpl->tpl_vars['_filter']->value) {?>
    <div class="pull-right flip">
        <div class="btn-group btn-group-xs js_posts-filter" data-value="all" title='<?php echo __("All");?>
'>
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                <i class="btn-group-icon fa fa-bars fa-fw"></i> <span class="btn-group-text"><?php echo __("All");?>
</span> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#" data-title='<?php echo __("All");?>
' data-value="all"><i class="fa fa-bars fa-fw"></i> <?php echo __("All");?>
</a></li>
                <li><a href="#" data-title='<?php echo __("Text");?>
' data-value=""><i class="fa fa-comment fa-fw"></i> <?php echo __("Text");?>
</a></li>
                <li><a href="#" data-title='<?php echo __("Photos");?>
' data-value="photos"><i class="fa fa-file-image-o fa-fw"></i> <?php echo __("Photos");?>
</a></li>
                <li><a href="#" data-title='<?php echo __("Videos");?>
' data-value="video"><i class="fa fa-film fa-fw"></i> <?php echo __("Videos");?>
</a></li>
                <li><a href="#" data-title='<?php echo __("Audios");?>
' data-value="audio"><i class="fa fa-music fa-fw"></i> <?php echo __("Audios");?>
</a></li>
                <li><a href="#" data-title='<?php echo __("Files");?>
' data-value="file"><i class="fa fa-file-text-o fa-fw"></i> <?php echo __("Files");?>
</a></li>
                <li><a href="#" data-title='<?php echo __("Polls");?>
' data-value="poll"><i class="fa fa-pie-chart fa-fw"></i> <?php echo __("Polls");?>
</a></li>
                <li><a href="#" data-title='<?php echo __("Products");?>
' data-value="product"><i class="fa fa-tag fa-fw"></i> <?php echo __("Products");?>
</a></li>
                <li><a href="#" data-title='<?php echo __("Articles");?>
' data-value="article"><i class="fa fa-file-text fa-fw"></i> <?php echo __("Articles");?>
</a></li>
                <li><a href="#" data-title='<?php echo __("Maps");?>
' data-value="map"><i class="fa fa-map-marker fa-fw"></i> <?php echo __("Maps");?>
</a></li>
            </ul>
        </div>
    </div>
    <?php }?>
</div>
<!-- posts-filter -->

<!-- posts-loader -->
<div class="post x-hidden js_posts_loader">
	<div class="post-body">
		<div class="panel-effect">
			<div class="fake-effect fe-0"></div>
			<div class="fake-effect fe-1"></div>
			<div class="fake-effect fe-2"></div>
			<div class="fake-effect fe-3"></div>
			<div class="fake-effect fe-4"></div>
			<div class="fake-effect fe-5"></div>
			<div class="fake-effect fe-6"></div>
			<div class="fake-effect fe-7"></div>
			<div class="fake-effect fe-8"></div>
			<div class="fake-effect fe-9"></div>
			<div class="fake-effect fe-10"></div>
			<div class="fake-effect fe-11"></div>
		</div>
	</div>
</div>
<!-- posts-loader -->

<?php if (count($_smarty_tpl->tpl_vars['posts']->value) > 0) {?>
	<div class="js_posts_stream" data-get="<?php echo $_smarty_tpl->tpl_vars['_get']->value;?>
" data-filter="<?php if ($_smarty_tpl->tpl_vars['_filter']->value) {
echo $_smarty_tpl->tpl_vars['_filter']->value;
} else { ?>all<?php }?>" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"<?php }?>>
		<ul>
			<!-- posts -->
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
			<?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>$_smarty_tpl->tpl_vars['_get']->value), 0, true);
?>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			<!-- posts -->
		</ul>

		<!-- see-more -->
		<div class="alert alert-post see-more mb10 js_see-more <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>js_see-more-infinite<?php }?>" data-get="<?php echo $_smarty_tpl->tpl_vars['_get']->value;?>
" data-filter="<?php if ($_smarty_tpl->tpl_vars['_filter']->value) {
echo $_smarty_tpl->tpl_vars['_filter']->value;
} else { ?>all<?php }?>" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"<?php }?>>
			<span><?php echo __("More Stories");?>
</span>
			<div class="loader loader_small x-hidden"></div>
		</div>
		<!-- see-more -->
	</div>
<?php } else { ?>
	<div class="js_posts_stream" data-get="<?php echo $_smarty_tpl->tpl_vars['_get']->value;?>
" data-filter="<?php if ($_smarty_tpl->tpl_vars['_filter']->value) {
echo $_smarty_tpl->tpl_vars['_filter']->value;
} else { ?>all<?php }?>" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"<?php }?>>
		<ul>
			<!-- no posts -->
			<div class="text-center x-muted">
				<i class="fa fa-newspaper-o fa-4x"></i>
				<p class="mb10"><strong><?php echo __("No posts to show");?>
</strong></p>
			</div>
			<!-- no posts -->
		</ul>
	</div>
<?php }
}
}
