<?php
/* Smarty version 3.1.31, created on 2018-01-01 13:28:37
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_album.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a4a37854286c6_27283169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53298964920526b7c8d8b9fe3b13a261a10b81e9' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_album.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4a37854286c6_27283169 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xs-6 col-sm-3">
	<div class="album-card">
		<a class="album-cover" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['album']->value['path'];?>
/album/<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['album']->value['cover'];?>
);">
		</a>
		<div class="album-details">
			<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['album']->value['path'];?>
/album/<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['album']->value['title']);?>
</a>
			<div>
				<?php echo $_smarty_tpl->tpl_vars['album']->value['photos_count'];?>
 <?php echo __("photos");?>

				<div class="pull-right flip">
					<?php if ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "me") {?>
						<i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
: <?php echo __("Only Me");?>
'></i>
					<?php } elseif ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "friends") {?>
						<i class="fa fa-users" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
: <?php echo __("Friends");?>
'></i>
					<?php } elseif ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "public") {?>
						<i class="fa fa-globe" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
: <?php echo __("Public");?>
'></i>
					<?php } elseif ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "custom") {?>
                    	<i class="fa fa-cog" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Custom People");?>
'></i>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
