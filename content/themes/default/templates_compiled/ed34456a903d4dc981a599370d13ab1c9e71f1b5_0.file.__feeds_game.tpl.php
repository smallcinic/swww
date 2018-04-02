<?php
/* Smarty version 3.1.31, created on 2018-02-22 17:04:44
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_game.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a8ef82ccda137_03710637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed34456a903d4dc981a599370d13ab1c9e71f1b5' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_game.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8ef82ccda137_03710637 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_tpl']->value != "list") {?>
    <li class="col-md-3 col-sm-6">
        <div class="box">
            <a class="box-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['_game']->value['thumbnail'];?>
');"></a>
            <div class="box-content">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
" class="title">
                    <?php echo $_smarty_tpl->tpl_vars['_game']->value['title'];?>

                </a>
                <div class="text clearfix">
                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
"><?php echo __("Play");?>
</a>
                </div>
            </div>
        </div>
    </li>
<?php } else { ?>
    <li class="feeds-item">
        <div class="data-container">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
">
                <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_game']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_game']->value['title'];?>
">
            </a>
            <div class="data-content">
                <div class="pull-right flip">
                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
"><?php echo __("Play");?>
</a>
                </div>
                <div>
                    <span class="name">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_game']->value['title'];?>
</a>
                    </span>
                </div>
            </div>
        </div>
    </li>
<?php }?>
    <?php }
}
