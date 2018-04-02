<?php
/* Smarty version 3.1.31, created on 2017-12-27 16:43:03
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43cd97f0f977_76727625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2057808b2ce819938b5fd4f5fd991028b2d95cbf' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_head.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../../includes/assets/css/bootstrap/css/bootstrap+social.css' => 1,
    'file:../css/style.css' => 1,
    'file:../css/style.rtl.css' => 1,
    'file:_head.css.tpl' => 1,
  ),
),false)) {
function content_5a43cd97f0f977_76727625 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<!--[if IE 8]><html class="ie8"> <![endif]-->
<!--[if IE 9]><html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="gt-ie8 gt-ie9 not-ie" lang="<?php echo $_smarty_tpl->tpl_vars['system']->value['language']['code'];?>
" <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "RTL") {?> dir="RTL" <?php }?>>
<!--<![endif]-->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="generator" content="Sngine">
    <meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_version'];?>
">

    <!-- Title -->
    <title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
    <!-- Title -->

    <!-- Meta -->
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_description'];?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_keywords'];?>
">
    <!-- Meta -->

    <!-- OG-Meta -->
    <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
"/>
    <meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_description'];?>
"/>
    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
"/>
    <meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
"/>
    <!-- OG-Meta -->

    <!-- OG-Image -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_ogimage']) {?>
        <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_ogimage'];?>
"/>
    <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['system_ogimage_default']) {?>
        <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/og-image.jpg"/>
    <?php }?>
    <!-- OG-Image -->

    <!-- Favicon -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_favicon_default']) {?>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/favicon.png" />
    <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['system_favicon']) {?>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_favicon'];?>
" />
    <?php }?>
    <!-- Favicon -->

    <!-- Dependencies CSS [Bootstrap|Font-Awesome] -->
    <style type="text/css"><?php $_smarty_tpl->_subTemplateRender("file:../../../../includes/assets/css/bootstrap/css/bootstrap+social.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 1, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</style>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/css/font-awesome/css/font-awesome.min.css">
    <?php }?>
    <!-- Dependencies CSS [Bootstrap|Font-Awesome] -->
    
    <!-- CSS -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "LTR") {?>
        <style type="text/css"><?php $_smarty_tpl->_subTemplateRender("file:../css/style.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 1, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</style>
    <?php } else { ?>
        <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/css/bootstrap/css/bootstrap-rtl.min.css">
        <style type="text/css"><?php $_smarty_tpl->_subTemplateRender("file:../css/style.rtl.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 1, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</style>
    <?php }?>
    <!-- CSS -->

    <!-- CSS Customized -->
    <?php $_smarty_tpl->_subTemplateRender('file:_head.css.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- CSS Customized -->

</head><?php }
}
