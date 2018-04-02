<?php
/* Smarty version 3.1.31, created on 2018-03-23 13:59:45
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.hacking.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ab5085162cd76_43482857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e6dec486555795fa0407050cf7b81311a747cf3' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.hacking.tpl',
      1 => 1521813584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab5085162cd76_43482857 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-flag pr5 panel-icon"></i>
        <strong><?php echo __("hacking");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?> &rsaquo; <strong><?php echo __("ices");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "icebreaker") {?> &rsaquo; <strong><?php echo __("icebreakers");?>
</strong><?php }?>
	    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "firewall") {?> &rsaquo; <strong><?php echo __("firewalls");?>
</strong><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
			<div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/hacking/add_ice" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New ice");?>

                </a>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "icebreaker") {?>
			<div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/hacking/add_icebreaker" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New icebreaker");?>

                </a>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "firewall") {?>
			<div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/hacking/add_firewall" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New firewall");?>

                </a>
            </div>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_firewall" || $_smarty_tpl->tpl_vars['sub_view']->value == "add_firewall") {?>
			<div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/hacking/firewall" class="btn btn-primary">
                    <i class="fa fa-backward"></i> <?php echo __("Return");?>

                </a>
            </div>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_icebreaker" || $_smarty_tpl->tpl_vars['sub_view']->value == "add_icebreaker") {?>
			<div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/hacking/icebreaker" class="btn btn-primary">
                    <i class="fa fa-backward"></i> <?php echo __("Return");?>

                </a>
            </div>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_ice" || $_smarty_tpl->tpl_vars['sub_view']->value == "add_ice") {?>
			<div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/hacking" class="btn btn-primary">
                    <i class="fa fa-backward"></i> <?php echo __("Return");?>

                </a>
            </div>
        <?php }?>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Code");?>
</th>
							<th><?php echo __("Count");?>
</th>
							<th><?php echo __("Name");?>
</th>
            			    <th><?php echo __("Level");?>
</th>
            			    <th><?php echo __("Url");?>
</th>
							<th><?php echo __("Username");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['count'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['level'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="ice" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/hacking/edit_ice/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_ice") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/hacking.php?do=add_ice">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
                    </div>
                </div>

				<label class="col-sm-3 control-label text-left">
                    <?php echo __("Admin");?>

                </label>
                <div class="col-sm-9">
                    <select class="form-control selectpicker" name="user_id">
			            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_users']->value, 'row_users');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_users']->value) {
?>
			                <option value="<?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_id'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_name'];?>

                            </option>
				        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			        </select>
					<span class="help-block">
                        <?php echo __("Select user from list");?>

                    </span>
                </div>

				<label class="col-sm-3 control-label text-left">
                    <?php echo __("Protect");?>

                </label>
                <div class="col-sm-9">
                    <select class="form-control selectpicker" name="protect_id">
					<option value="0" selected>
                         No protect
                    </option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_protect']->value, 'row_protect');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_protect']->value) {
?>
		                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_protect']->value['id'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['row_protect']->value['name'];?>

                            </option>
			            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    	            </select>
					<span class="help-block">
                        <?php echo __("Select protect from list");?>

                    </span>
                </div>
				
                <label class="col-sm-3 control-label text-left">
                    <?php echo __("Available");?>

                </label>
                <div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available">
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        <?php echo __("Make this ice available for players");?>

                    </span>
                </div>


                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Add New");?>
</button>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_ice") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/hacking.php?do=edit_ice&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
                    </div>
                </div>
				
    			<label class="col-sm-3 control-label text-left">
                    <?php echo __("Admin");?>

                </label>
                <div class="col-sm-9">
                    <select class="form-control selectpicker" name="user_id">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_users']->value, 'row_users');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_users']->value) {
?>
		                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row_users']->value['user_id'] == $_smarty_tpl->tpl_vars['data']->value['admin_id']) {?>selected<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_name'];?>

                            </option>
			            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    	            </select>
					<span class="help-block">
                        <?php echo __("Select user from list");?>

                    </span>
                </div>
				
				<label class="col-sm-3 control-label text-left">
                    <?php echo __("Protect");?>

                </label>
                <div class="col-sm-9">
                    <select class="form-control selectpicker" name="protect_id">
					    <option value="0" <?php if ($_smarty_tpl->tpl_vars['row_protect']->value['id'] == '0') {?>selected<?php }?>>
                            No protect
                        </option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_protect']->value, 'row_protect');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_protect']->value) {
?>
		                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_protect']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row_protect']->value['id'] == $_smarty_tpl->tpl_vars['data']->value['protect_id']) {?>selected<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['row_protect']->value['name'];?>

                            </option>
			            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    	            </select>
					<span class="help-block">
                        <?php echo __("Select protect from list");?>

                    </span>
                </div>

				<label class="col-sm-3 control-label text-left">
                    <?php echo __("Available");?>

                </label>
                <div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available" <?php if ($_smarty_tpl->tpl_vars['data']->value['available']) {?>checked<?php }?>>
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        <?php echo __("Make this ice available for players");?>

                    </span>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "icebreaker") {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Code");?>
</th>
							<th><?php echo __("Numbers");?>
</th>
							<th><?php echo __("Operations");?>
</th>
            			    <th><?php echo __("Owner");?>
</th>
            			    <th><?php echo __("Active");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nums'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['op'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
</td>
		            	    <td><?php if ($_smarty_tpl->tpl_vars['row']->value['active']) {?> <?php echo __("Yes");?>
 <?php } else { ?> <?php echo __("No");?>
 <?php }?></td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="ice" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/hacking/edit_ice/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_icebreaker") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/hacking.php?do=add_icebreaker">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
						<span class="help-block">
                            <?php echo __("Text name of this icebreaker");?>

                        </span>
                    </div>

					<label class="col-sm-3 control-label text-left">
                        <?php echo __("Admin");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="user_id">
			                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_users']->value, 'row_users');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_users']->value) {
?>
			                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_name'];?>

                                </option>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			            </select>
						<span class="help-block">
                            <?php echo __("Select user from list");?>

                        </span>
                    </div>
					
    				<label class="col-sm-3 control-label text-left">
                        <?php echo __("Protect");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="protect_id">
		    	    		<option value="0" selected>
                                No protect
                            </option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_protect']->value, 'row_protect');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_protect']->value) {
?>
		                        <option value="<?php echo $_smarty_tpl->tpl_vars['row_protect']->value['id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row_protect']->value['name'];?>

                                </option>
		                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    	                </select>
					    <span class="help-block">
                            <?php echo __("Select protect from list");?>

                        </span>
                    </div>
					
					<label class="col-sm-3 control-label text-left">
                        <?php echo __("ice");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="net_id">
			                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_ice']->value, 'row_ice');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_ice']->value) {
?>
			                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_ice']->value['id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row_ice']->value['name'];?>

                                </option>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			            </select>
						<span class="help-block">
                            <?php echo __("Select user from list");?>

                        </span>
                    </div>
				
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Available");?>

                    </label>

					<div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available">
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        <?php echo __("Make this ice available for players");?>

                    </span>
                </div>


                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Add New");?>
</button>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_icebreaker") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/hacking.php?do=edit_icebreaker&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
						<span class="help-block">
                            <?php echo __("Text name of this icebreaker");?>

                        </span>
                    </div>

					<label class="col-sm-3 control-label text-left">
                        <?php echo __("Admin");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="user_id">
			                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_users']->value, 'row_users');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_users']->value) {
?>
			                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row_users']->value['user_id'] == $_smarty_tpl->tpl_vars['data']->value['admin_id']) {?>selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_name'];?>

                                </option>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			            </select>
						<span class="help-block">
                            <?php echo __("Select user from list");?>

                        </span>
                    </div>
					
					<label class="col-sm-3 control-label text-left">
                        <?php echo __("Protect");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="protect_id">
					        <option value="0" <?php if ($_smarty_tpl->tpl_vars['row_protect']->value['id'] == '0') {?>selected<?php }?>>
                                No protect
                            </option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_protect']->value, 'row_protect');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_protect']->value) {
?>
		                        <option value="<?php echo $_smarty_tpl->tpl_vars['row_protect']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row_protect']->value['id'] == $_smarty_tpl->tpl_vars['data']->value['protect_id']) {?>selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['row_protect']->value['name'];?>

                                </option>
			                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    	                </select>
					    <span class="help-block">
                            <?php echo __("Select protect from list");?>

                        </span>
                    </div>
					
					<label class="col-sm-3 control-label text-left">
                        <?php echo __("ice");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="net_id">
			                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_ice']->value, 'row_ice');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_ice']->value) {
?>
			                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_ice']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row_ice']->value['id'] == $_smarty_tpl->tpl_vars['data']->value['net_id']) {?>selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['row_ice']->value['name'];?>

                                </option>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			            </select>
						<span class="help-block">
                            <?php echo __("Select user from list");?>

                        </span>
                    </div>
				
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Available");?>

                    </label>

					<div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available" <?php if ($_smarty_tpl->tpl_vars['data']->value['available']) {?>checked<?php }?>>
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        <?php echo __("Make this ice available for players");?>

                    </span>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "firewall") {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
							<th><?php echo __("Name");?>
</th>
                            <th><?php echo __("icebreaker");?>
</th>
							<th><?php echo __("Text");?>
</th>
			                <th><?php echo __("Availability");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['icebreaker'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>
</td>
			                <td><?php if ($_smarty_tpl->tpl_vars['row']->value['available']) {?> <?php echo __("Yes");?>
 <?php } else { ?> <?php echo __("No");?>
 <?php }?></td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="firewall" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/hacking/edit_firewall/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_firewall") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/hacking.php?do=add_firewall">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
						<span class="help-block">
                            <?php echo __("Text name of this icebreaker");?>

                        </span>
                    </div>

					<label class="col-sm-3 control-label text-left">
                        <?php echo __("icebreaker");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="icebreaker_id">
			                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_icebreaker']->value, 'row_icebreaker');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_icebreaker']->value) {
?>
			                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_icebreaker']->value['id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row_icebreaker']->value['name'];?>

                                </option>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			            </select>
						<span class="help-block">
                            <?php echo __("Select icebreaker from list");?>

                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label">
                        <?php echo __("Text");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="text" rows="3"></textarea>
                        <span class="help-block">
                            <?php echo __("The text of this new firewall");?>

                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Available");?>

                    </label>

					<div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available">
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        <?php echo __("Make this ice available for players");?>

                    </span>
                </div>


                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Add New");?>
</button>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_firewall") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/hacking.php?do=edit_firewall&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
						<span class="help-block">
                            <?php echo __("Text name of this icebreaker");?>

                        </span>
                    </div>

					<label class="col-sm-3 control-label text-left">
                        <?php echo __("icebreaker");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="icebreaker_id">
			                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_icebreaker']->value, 'row_icebreaker');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_icebreaker']->value) {
?>
			                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_icebreaker']->value['id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row_icebreaker']->value['name'];?>

                                </option>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			            </select>
						<span class="help-block">
                            <?php echo __("Select icebreaker from list");?>

                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label">
                        <?php echo __("Text");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="text" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['text'];?>
</textarea>
                        <span class="help-block">
                            <?php echo __("The text of this firewall");?>

                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Available");?>

                    </label>

					<div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available" <?php if ($_smarty_tpl->tpl_vars['data']->value['available']) {?>checked<?php }?>>
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        <?php echo __("Make this firewall available for players");?>

                    </span>
                </div>


                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
        </div>
    <?php }?>
</div>
<?php }
}
