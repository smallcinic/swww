<?php
/* Smarty version 3.1.31, created on 2018-02-21 19:09:35
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.rfid.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a8dc3ef9c5052_53076593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3fdca36debb9cf7c8c16ac094efd7a09ca8727c' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.rfid.tpl',
      1 => 1519240102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8dc3ef9c5052_53076593 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-flag pr5 panel-icon"></i>
        <strong><?php echo __("RFID");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_rfid") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['rfid'];?>
</strong><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_rfid" || $_smarty_tpl->tpl_vars['sub_view']->value == "add_rfid") {?>
			<div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/rfid" class="btn btn-primary">
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
                            <th><?php echo __("RFID");?>
</th>
			                <th><?php echo __("Model");?>
</th>
							<th><?php echo __("Name");?>
</th>
                            <th><?php echo __("Text");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['rfid'];?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['model'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
			                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>
</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="rfid" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/rfid/edit_rfid/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
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
		    <div>
	            <label class="col-sm-9 control-label text-left">
                    <strong><?php echo __("New RFID will be added automatically.");?>
</strong>
                </label>
            </div>
		</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_rfid") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/rfid.php?do=edit_rfid&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
                <div class="form-group">
		            <label class="col-sm-3 control-label text-left">
                        <strong><?php echo __("RFID");?>
</strong>
                    </label>
		            <div class="col-sm-9">
                        <input class="form-control" name="rfid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['rfid'];?>
" readonly>
						<span class="help-block">
                        <?php echo __("RFID ID, this must be NEVER edited manually");?>

                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label text-left">
                        <strong><?php echo __("Model");?>
</strong>
                    </label>
					<div class="col-sm-9">
                        <select class="form-control selectpicker" name="model_id">
			                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_model']->value, 'row_model');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_model']->value) {
?>
			                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_model']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row_model']->value['id'] == $_smarty_tpl->tpl_vars['data']->value['model_id']) {?>selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['row_model']->value['name'];?>

                                </option>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			            </select>
						<span class="help-block">
                            <?php echo __("Select model for this RFID");?>

                        </span>
                    </div>
					
					<label class="col-sm-3 control-label text-left">
                        <strong><?php echo __("Attached record");?>
</strong>
                    </label>
					<div class="col-sm-9">
                        <select class="form-control selectpicker" name="record_id">
			                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_record']->value, 'row_record');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_record']->value) {
?>
			                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_record']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row_record']->value['id'] == $_smarty_tpl->tpl_vars['data']->value['record_id']) {?>selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['row_record']->value['name'];?>

                                </option>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			            </select>
						<span class="help-block">
                            <?php echo __("Select database record for this RFID");?>

                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label text-left">
                        <strong><?php echo __("Text");?>
</strong>
                    </label>
                    <div class="col-sm-9">
					    <textarea class="form-control" name="text" rows="3" readonly><?php echo $_smarty_tpl->tpl_vars['data']->value['text'];?>
</textarea>
						<span class="help-block">
                            <?php echo __("This text is editable in Database->Records");?>

                        </span>
                    </div>
					
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
