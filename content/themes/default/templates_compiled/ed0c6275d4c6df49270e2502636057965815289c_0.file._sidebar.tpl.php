<?php
/* Smarty version 3.1.31, created on 2018-02-26 17:25:06
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a9442f26d01b2_53200855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed0c6275d4c6df49270e2502636057965815289c' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_sidebar.tpl',
      1 => 1519665904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9442f26d01b2_53200855 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav nav-pills nav-stacked nav-home js_sticky-sidebar">
    <!-- basic -->
    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
">
            <span><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
</span>
        </a>
    </li>


    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
/friends">
            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/friends_1.png">
            <?php echo __("My Friends");?>

        </a>
    </li>

    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
/photos">
            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/pictures_1.png">
            <?php echo __("My Photos");?>

        </a>
    </li>

    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages">
            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/chat_1.png">
            <?php echo __("Messages");?>

        </a>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] == 1) {?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/admin_1.png">
                <?php echo __("Admin Panel");?>

            </a>
        </li>
    <?php }?>
    <!-- basic -->

    <!-- favorites -->
    <li class="ptb5">
        <small class="text-muted"><?php echo mb_strtoupper(__("favorites"), 'UTF-8');?>
</small>
    </li>

    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/newfeed_1.png">
            <?php echo __("News Feed");?>

        </a>
    </li>

    <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "articles") {?>class="active"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/articles">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/article_1.png">
                <?php echo __("My Articles");?>

            </a>
        </li>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "products") {?>class="active"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/products">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/products_1.png">
                <?php echo __("My Products");?>

            </a>
        </li>
    <?php }?>
    
    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "saved") {?>class="active"<?php }?>>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/saved">
            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/saved_1.png">
            <?php echo __("Saved Posts");?>

        </a>
    </li>
    <!-- favorites -->

    <!-- explore -->
    <li class="ptb5">
        <small class="text-muted"><?php echo mb_strtoupper(__("explore"), 'UTF-8');?>
</small>
    </li>

    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "people") {?>class="active"<?php }?>>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people">
            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/people_1.png">
            <?php echo __("People");?>

        </a>
    </li>

    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3 || $_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "pages") {?>class="active"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/pages_1.png">
                <?php echo __("Pages");?>

            </a>
        </li>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3 || $_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "groups") {?>class="active"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/groups_1.png">
                <?php echo __("Groups");?>

            </a>
        </li>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "events") {?>class="active"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/events_1.png">
                <?php echo __("Events");?>

            </a>
        </li>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/blogs_1.png">
                <?php echo __("Blogs");?>

            </a>
        </li>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/market_1.png">
                <?php echo __("Market");?>

            </a>
        </li>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "games") {?>class="active"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/games_1.png">
                <?php echo __("Games");?>

            </a>
        </li>
    <?php }?>
    <!-- explore -->

    <!-- models -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['models_enabled']) {?>
        <li class="ptb5">
            <small class="text-muted"><?php echo mb_strtoupper(__("models"), 'UTF-8');?>
</small>
        </li>
		
		<?php $_smarty_tpl->_assignInScope('models', get_models());
?>
		<?php if (count($_smarty_tpl->tpl_vars['models']->value) > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['models']->value, 'model');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['model']->value) {
?>
                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == ((string)$_smarty_tpl->tpl_vars['model']->value['name'])) {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['model']->value['name'], 'UTF-8');?>
">
						    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/games_1.png">
							<?php echo $_smarty_tpl->tpl_vars['model']->value['name'];?>

						</a>
                    </li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        <?php } else { ?>
			<li>
                <?php echo __("No models to show");?>

		    </li>
		<?php }?>
	<?php }?>

</ul>
<?php }
}
