<?php
/* Smarty version 3.1.31, created on 2017-12-30 00:09:40
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/started.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a46d9442d12a3_01052966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dc7f2bf3ee59665344f6b26a0364cd4733b156a' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/started.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5a46d9442d12a3_01052966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="container mt20">
    <div class="row">
    	<div class="col-md-10 col-md-offset-1">

    		<div class="wizard-header">
    			<h3>
    				<b><?php echo __("BUILD");?>
</b> <?php echo __("YOUR PROFILE");?>
<br>
    				<small><?php echo __("This information will let us know more about you");?>
.</small>
    			</h3>
    		</div>
    		
    		<ul class="nav nav-pills nav-justified thumbnail js_wizard-steps">
                <li class="active">
                	<a href="#step-1">
                		<h4 class="list-group-item-heading"><?php echo __("Step 1");?>
</h4>
                		<p class="list-group-item-text"><?php echo __("Upload your photo");?>
</p>
                	</a>
                </li>
                <li class="disabled">
                	<a href="#step-2">
                		<h4 class="list-group-item-heading"><?php echo __("Step 2");?>
</h4>
                		<p class="list-group-item-text"><?php echo __("Update your info");?>
</p>
                	</a>
                </li>
                <li class="disabled">
                	<a href="#step-3">
                		<h4 class="list-group-item-heading"><?php echo __("Step 3");?>
</h4>
                		<p class="list-group-item-text"><?php echo __("Add Friends");?>
</p>
                	</a>
                </li>
            </ul>

            <div class="well js_wizard-content" id="step-1">
            	<div class="text-center">
            		<h3 class="mb5"><?php echo __("Welcome");?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
</h3>
	            	<p class="mb20"><?php echo __("Let's start with your photo");?>
</p>
            	</div>
            	
            	<!-- profile-avatar -->
            	<div class="relative" style="height: 160px;">
            		<div class="profile-avatar-wrapper static">
	            		<img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
">
	            		<div class="profile-avatar-change">
	            			<i class="fa fa-camera js_x-uploader" data-handle="picture-user"></i>
	            		</div>
	            		<div class="profile-avatar-delete">
	            			<i class="fa fa-trash js_delete-picture" data-handle="picture-user" title='<?php echo __("Delete Picture");?>
'></i>
	            		</div>
	            		<div class="profile-avatar-change-loader">
	            			<div class="loader loader_medium"></div>
	            		</div>
	            	</div>
            	</div>
            	<!-- profile-avatar -->

            	<!-- buttons -->
            	<div class="clearfix mt20">
            		<button id="activate-step-2" class="btn btn-primary pull-right flip"><?php echo __("Next Step");?>
</button>
            	</div>
            	<!-- buttons -->
            </div>

            <div class="well js_wizard-content x-hidden" id="step-2">
            	<div class="text-center">
            		<h3 class="mb5"><?php echo __("Update your info");?>
</h3>
	            	<p class="mb20"><?php echo __("Share your information with our community");?>
</p>
            	</div>

            	<form class="js_ajax-forms" data-url="users/started.php">
            		<div class="form-group">
            			<label for="city"><?php echo __("Current City");?>
</label>
            			<input type="text" class="form-control js_geocomplete" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_current_city'];?>
">
            		</div>
            		<div class="form-group">
            			<label for="hometown"><?php echo __("Hometown");?>
</label>
            			<input type="text" class="form-control js_geocomplete" name="hometown" id="hometown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_hometown'];?>
">
            		</div>

            		<div class="form-group">
            			<label for="work_title"><?php echo __("Work Title");?>
</label>
            			<input type="text" class="form-control" name="work_title" id="work_title" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_title'];?>
">
            		</div>
            		<div class="form-group">
            			<label for="work_place"><?php echo __("Work Place");?>
</label>
            			<input type="text" class="form-control" name="work_place" id="work_place" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_place'];?>
">
            		</div>

            		<div class="form-group">
            			<label for="edu_major"><?php echo __("Major");?>
</label>
            			<input type="text" class="form-control" name="edu_major" id="edu_major" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_major'];?>
">
            		</div>
            		<div class="form-group">
            			<label for="edu_school"><?php echo __("School");?>
</label>
            			<input type="text" class="form-control" name="edu_school" id="edu_school" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_school'];?>
">
            		</div>
            		<div class="form-group">
            			<label for="edu_class"><?php echo __("Class");?>
</label>
            			<input type="text" class="form-control" name="edu_class" id="edu_class" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_class'];?>
">
            		</div>

            		<!-- success -->
            		<div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
            		<!-- success -->

            		<!-- error -->
            		<div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
            		<!-- error -->

            		<!-- buttons -->
            		<div class="clearfix mt20">
            			<div class="pull-right flip">
            				<button type="submit" class="btn btn-success"><?php echo __("Save Changes");?>
</button>
            				<button type="button" class="btn btn-primary" id="activate-step-3"><?php echo __("Next Step");?>
</button>
            			</div>
            		</div>
            		<!-- buttons -->
            	</form>
            </div>

            <div class="well js_wizard-content x-hidden" id="step-3">
            	<div class="text-center">
            		<h3 class="mb5"><?php echo __("Add Friends");?>
</h3>
            		<p class="mb20"><?php echo __("Get latest activities from our popular users");?>
</p>
            	</div>
            	
            	<!-- new people -->
            	<ul class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['new_people'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
            		<?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"add",'_parent'=>"profile"), 0, true);
?>

            		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            	</ul>
            	<!-- new people -->

            	<!-- buttons -->
            	<div class="clearfix mt20">
            		<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/started/finished" class="btn btn-danger pull-right flip"><?php echo __("Finish");?>
</a>
            	</div>
            	<!-- buttons -->
            </div>          

        </div>
    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript">
    $(function() {

        var wizard_steps = $('.js_wizard-steps li a');
        var wizard_content = $('.js_wizard-content');

        wizard_content.hide();

        wizard_steps.click(function(e) {
            e.preventDefault();
            var $target = $($(this).attr('href'));
            var $item = $(this).closest('li');
            if(!$item.hasClass('disabled')) {
                wizard_steps.closest('li').removeClass('active');
                $item.addClass('active');
                wizard_content.hide();
                $target.show();
            }
        });

        $('.js_wizard-steps li.active a').trigger('click');

        $('#activate-step-2').on('click', function(e) {
            $('.js_wizard-steps li:eq(1)').removeClass('disabled');
            $('.js_wizard-steps li a[href="#step-2"]').trigger('click');
        });

        $('#activate-step-3').on('click', function(e) {
            $('.js_wizard-steps li:eq(2)').removeClass('disabled');
            $('.js_wizard-steps li a[href="#step-3"]').trigger('click');
        });

    });
<?php echo '</script'; ?>
><?php }
}
