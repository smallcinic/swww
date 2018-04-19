<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-flag pr5 panel-icon"></i>
        <strong>{__("RFID")}</strong>
        {if $sub_view == "edit_rfid"} &rsaquo; <strong>{$data['rfid']}</strong>{/if}
        {if $sub_view == ""}
            <div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/rfid/add_rfid" class="btn btn-primary">
                    <i class="fa fa-plus"></i> {__("Add New RFID")}
                </a>
            </div>
        {/if}
		{if $sub_view == "edit_rfid" || $sub_view == "add_rfid"}
			<div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/rfid" class="btn btn-primary">
                    <i class="fa fa-backward"></i> {__("Return")}
                </a>
            </div>
        {/if}
	</div>
    {if $sub_view == ""}
        <div class="panel-body">
    		<div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("ID")}</th>
                            <th>{__("RFID")}</th>
			                <th>{__("Model")}</th>
							<th>{__("Name")}</th>
                            <th>{__("Text")}</th>
			                <th>{__("Actions")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['rfid']}</td>
			                <td>{$row['model']}</td>
							<td>{$row['name']}</td>
			                <td>{$row['text']}</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='{__("Delete")}' class="btn btn-xs btn-danger js_admin-deleter" data-handle="rfid" data-id="{$row['id']}">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='{__("Edit")}' href="{$system['system_url']}/admincp/rfid/edit_rfid/{$row['id']}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
		    <div>
	            <label class="col-sm-9 control-label text-left">
                    <strong>{__("New RFID will be added automatically.")}</strong>
                </label>
            </div>
		</div>
    {elseif $sub_view == "edit_rfid"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/rfid.php?do=edit_rfid&id={$data['id']}">
                <div class="form-group">
		            <label class="col-sm-3 control-label text-left">
                        <strong>{__("RFID")}</strong>
                    </label>
		            <div class="col-sm-9">
                        <input class="form-control" name="rfid" value="{$data['rfid']}" {if !$data['manual_edit']}readonly{/if}>
						<span class="help-block">
                        {__("RFID ID, this must be NEVER edited manually")}
                        </span>
                    </div>
                    <label class="col-sm-3 control-label text-left">
                        {__("Allow RFID editing")}
                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="manual_edit">
                            <input type="checkbox" name="manual_edit" id="manual_edit" {if $data['manual_edit']}checked{/if}>
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <label class="col-sm-3 control-label text-left">
                        <strong>{__("Model")}</strong>
                    </label>
					<div class="col-sm-9">
                        <select class="form-control selectpicker" name="model_id">
			                {foreach $rows_model as $row_model}
			                    <option value="{$row_model['id']}" {if $row_model['id']==$data['model_id']}selected{/if}>
                                    {$row_model['name']}
                                </option>
				            {/foreach}
			            </select>
						<span class="help-block">
                            {__("Select model for this RFID")}
                        </span>
                    </div>
					
					<label class="col-sm-3 control-label text-left">
                        <strong>{__("Attached record")}</strong>
                    </label>
					<div class="col-sm-9">
                        <select class="form-control selectpicker" name="record_id">
			                {foreach $rows_record as $row_record}
			                    <option value="{$row_record['id']}" {if $row_record['id']==$data['record_id']}selected{/if}>
                                    {$row_record['name']}
                                </option>
				            {/foreach}
			            </select>
						<span class="help-block">
                            {__("Select database record for this RFID")}
                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label text-left">
                        <strong>{__("Text")}</strong>
                    </label>
                    <div class="col-sm-9">
					    <textarea class="form-control" name="text" rows="3" readonly>{$data['text']}</textarea>
						<span class="help-block">
                            {__("This text is editable in Database->Records")}
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
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
    {elseif $sub_view == "add_rfid"}
    <div class="panel-body">
        <form class="js_ajax-forms form-horizontal" data-url="admin/rfid.php?do=add_rfid">

            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    <strong>{__("RFID")}</strong>
                </label>
                <div class="col-sm-9">
                    <input class="form-control" name="rfid">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary">{__("Submit")}</button>
                </div>
            </div>

        </form>
    </div>

    {/if}
</div>
