<?php
/* Smarty version 3.1.31, created on 2018-03-16 18:40:11
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.likes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5aac0f8b775295_56839544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec3903fd2772c3c2881a7d8e786cbc1c6e37837c' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.likes.tpl',
      1 => 1520279477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aac0f8b775295_56839544 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-flag pr5 panel-icon"></i>
        <strong><?php echo __("Likes");?>
</strong>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("Firstname");?>
 <?php echo __("And");?>
 <?php echo __("Lastname");?>
</th>
                            <th><?php echo __("Pages likes");?>
</th>
                            <th><?php echo __("Comments Likes");?>
</th>
                            <th><?php echo __("Posts Likes");?>
</th>
                            <th><?php echo __("Photos Likes");?>
</th>
                            <th><?php echo __("Pages + Posts + Photos/5 + Comments/10");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <tr>
                            <td><a href="/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['user_lastname'];?>
</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['pages_likes'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['comments_likes'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['posts_likes'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['photos_likes'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['pages_likes']+$_smarty_tpl->tpl_vars['row']->value['posts_likes']+$_smarty_tpl->tpl_vars['row']->value['photos_likes']/5+$_smarty_tpl->tpl_vars['row']->value['comments_likes']/10;?>
</td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </tbody>
                </table>
            </div>
        </div>
    <?php }?>
</div>
<?php }
}
