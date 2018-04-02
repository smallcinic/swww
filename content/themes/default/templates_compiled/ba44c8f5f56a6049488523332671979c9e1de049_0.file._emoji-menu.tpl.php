<?php
/* Smarty version 3.1.31, created on 2017-12-27 16:43:04
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_emoji-menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43cd988b01f0_17716594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba44c8f5f56a6049488523332671979c9e1de049' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_emoji-menu.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a43cd988b01f0_17716594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('id', uniqid());
?>

<div class="emoji-menu">
	<div class="tab-content">
		<div class="tab-pane active" id="tab-emojis-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			<div class="js_scroller" data-slimScroll-height="180">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->get_emojis(), 'emoji');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['emoji']->value) {
?>
					<div class="item">
						<i data-emoji="<?php echo $_smarty_tpl->tpl_vars['emoji']->value['pattern'];?>
" class="js_emoji twa twa-2x twa-<?php echo $_smarty_tpl->tpl_vars['emoji']->value['class'];?>
"></i>
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			</div>
	    </div>

	    <div class="tab-pane" id="tab-stickers-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			<div class="js_scroller" data-slimScroll-height="180">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->get_stickers(), 'sticker');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sticker']->value) {
?>
					<div class="item">
						<img data-emoji=":STK-<?php echo $_smarty_tpl->tpl_vars['sticker']->value['sticker_id'];?>
:" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['sticker']->value['image'];?>
" class="js_emoji">
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			</div>
	    </div>
	</div>

    <ul class="nav nav-tabs">
		<li class="active">
			<a href="#tab-emojis-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-toggle="tab">
				<i class="fa fa-smile-o fa-fw"></i> <?php echo __("Emojis");?>

			</a>
		</li>
		<li>
			<a href="#tab-stickers-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-toggle="tab">
				<i class="fa fa-hand-peace-o fa-fw"></i> <?php echo __("Stickers");?>

			</a>
		</li>
    </ul>
</div><?php }
}
