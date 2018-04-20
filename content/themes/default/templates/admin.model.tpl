<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-flag pr5 panel-icon"></i>
        <strong>{__("Models")}</strong>
        {if $sub_view == "edit_model"} &rsaquo; <strong>{$data['name']}</strong>{/if}
        {if $sub_view == "add_model"} &rsaquo; <strong>{__("Add New")}</strong>{/if}
	{if $sub_view == "map"} &rsaquo; <strong>{__("Map")}</strong>{/if}
	{if $sub_view == "device"} &rsaquo; <strong>{__("Device")}</strong>{/if}
		{if $sub_view == "research"} &rsaquo; <strong>{__("Device")}</strong>{/if}


        {if $sub_view == ""}
            <div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/model/add_model" class="btn btn-primary">
                    <i class="fa fa-plus"></i> {__("Add New Model")}
                </a>
            </div>
        {/if}
	{if $sub_view == "map"}
            <div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/model/add_map" class="btn btn-primary">
                    <i class="fa fa-plus"></i> {__("Add New Map")}
                </a>
            </div>
        {/if}
	{if $sub_view == "device"}
            <div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/model/add_device" class="btn btn-primary">
                    <i class="fa fa-plus"></i> {__("Add New Device")}
                </a>
            </div>
        {/if}
		{if $sub_view == "research"}
            <div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/model/add_research" class="btn btn-primary">
                    <i class="fa fa-plus"></i> {__("Add New Receipt")}
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
                            <th>{__("Name")}</th>
                            <th>{__("Actions")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='{__("Delete")}' class="btn btn-xs btn-danger js_admin-deleter" data-handle="model" data-id="{$row['id']}">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='{__("Edit")}' href="{$system['system_url']}/admincp/model/edit_model/{$row['id']}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {elseif $sub_view == "add_model"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/model.php?do=add_model">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="model_name">
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
    {elseif $sub_view == "edit_model"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/model.php?do=edit_model&id={$data['id']}">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="model_name" value="{$data['name']}">
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
    {elseif $sub_view == "map"}
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("ID")}</th>
                            <th>{__("Name")}</th>
			    <th>{__("User")}</th>
                            <th>{__("Actions")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
			    <td>{$row['user_name']}</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='{__("Delete")}' class="btn btn-xs btn-danger js_admin-deleter" data-handle="model_map" data-id="{$row['id']}">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {elseif $sub_view == "add_map"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/model.php?do=add_map">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("User")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="user_id">
			                {foreach $rows_users as $row_users}
			                    <option value="{$row_users['user_id']}">
                                    {$row_users['user_name']}
                                </option>
				            {/foreach}
			            </select>
						<span class="help-block">
                            {__("Select from users list")}
                        </span>
                    </div>
                    <label class="col-sm-3 control-label text-left">
                        {__("Models")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="model_id">
				            {foreach $rows_model as $row_model}
                                <option value="{$row_model['id']}">
                                    {$row_model['name']}
                                </option>
                            {/foreach}
                        </select>
						<span class="help-block">
                            {__("Select model from added before. You may add new on this psge:")} <a target="_blank" href="/admincp/model/add_model">{__("Click Here")}</a>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">{__("Add New")}</button>
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
    {elseif $sub_view == "device"}
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("ID")}</th>
                            <th>{__("Name")}</th>
							<th>{__("Server")}</th>
                            <th>{__("Actions")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
							<td>{$row['server_name']}</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='{__("Delete")}' class="btn btn-xs btn-danger js_admin-deleter" data-handle="device" data-id="{$row['id']}">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='{__("Edit")}' href="{$system['system_url']}/admincp/model/edit_device/{$row['id']}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {elseif $sub_view == "add_device"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/model.php?do=add_device">
			
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Server")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="server_id">
				            {foreach $rows_server as $row_server}
                                <option value="{$row_server['id']}">
                                    {$row_server['name']}
                                </option>
                            {/foreach}
                        </select>
						<span class="help-block">
                            {__("Select server from added before. You may add new on this psge:")} <a target="_blank" href="/admincp/model/add_model">{__("Click Here")}</a>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">{__("Add New")}</button>
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
    {elseif $sub_view == "edit_device"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/model.php?do=edit_device&id={$data['id']}">
			
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name" value="{$data['name']}">
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Server")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="server_id">
				            {foreach $rows_server as $row_server}
                                <option value="{$row_server['id']}" {if $row_server['id']==$data['server_id']}selected{/if}>
                                    {$row_server['name']}
                                </option>
                            {/foreach}
                        </select>
						<span class="help-block">
                            {__("Select server from added before. You may add new on this psge:")} <a target="_blank" href="/admincp/model/add_model">{__("Click Here")}</a>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">{__("Add New")}</button>
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
    {elseif $sub_view == "research"}
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("ID")}</th>
							<th>{__("Name")}</th>
                            <th>{__("rec1")}</th>
							<th>{__("rec2")}</th>
                            <th>{__("rec3")}</th>
                            <th>{__("Actions")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                        <tr>
                            <td>{$row['id']}</td>
							<td>{$row['name']}</td>
                            <td>{$row['rec1_name']}</td>
                            <td>{$row['rec2_name']}</td>
                            <td>{$row['rec3_name']}</td>							
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='{__("Delete")}' class="btn btn-xs btn-danger js_admin-deleter" data-handle="research" data-id="{$row['id']}">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='{__("Edit")}' href="{$system['system_url']}/admincp/model/edit_research/{$row['id']}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {elseif $sub_view == "add_research"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/model.php?do=add_research">
			
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Record 1")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="rec1">
				            {foreach $rows_server as $row_server}
                                <option value="{$row_server['id']}">
                                    {$row_server['name']}
                                </option>
                            {/foreach}
                        </select>
						<span class="help-block">
                            {__("Select record from added before. You may add new on this psge:")} <a target="_blank" href="/admincp/model/add_model">{__("Click Here")}</a>
                        </span>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Record 2")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="rec2">
				            {foreach $rows_server as $row_server}
                                <option value="{$row_server['id']}">
                                    {$row_server['name']}
                                </option>
                            {/foreach}
                        </select>
						<span class="help-block">
                            {__("Select record from added before. You may add new on this psge:")} <a target="_blank" href="/admincp/model/add_model">{__("Click Here")}</a>
                        </span>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Result")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="rec3">
				            {foreach $rows_server as $row_server}
                                <option value="{$row_server['id']}">
                                    {$row_server['name']}
                                </option>
                            {/foreach}
                        </select>
						<span class="help-block">
                            {__("Select record from added before. You may add new on this psge:")} <a target="_blank" href="/admincp/model/add_model">{__("Click Here")}</a>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">{__("Add New")}</button>
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
    {elseif $sub_view == "edit_research"}
	    <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/model.php?do=edit_research&id={$data['id']}">
			
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name"  value="{$data['name']}">
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Record 1")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="rec1">
				            {foreach $rows_server as $row_server}
                                <option value="{$row_server['id']}" {if $row_server['id']==$data['rec1']}selected{/if}>
                                    {$row_server['name']}
                                </option>
                            {/foreach}
                        </select>
						<span class="help-block">
                            {__("Select record from added before. You may add new on this psge:")} <a target="_blank" href="/admincp/model/add_model">{__("Click Here")}</a>
                        </span>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Record 2")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="rec2">
				            {foreach $rows_server as $row_server}
                                <option value="{$row_server['id']}" {if $row_server['id']==$data['rec2']}selected{/if}>
                                    {$row_server['name']}
                                </option>
                            {/foreach}
                        </select>
						<span class="help-block">
                            {__("Select record from added before. You may add new on this psge:")} <a target="_blank" href="/admincp/model/add_model">{__("Click Here")}</a>
                        </span>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Result")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="rec3">
				            {foreach $rows_server as $row_server}
                                <option value="{$row_server['id']}" {if $row_server['id']==$data['rec3']}selected{/if}>
                                    {$row_server['name']}
                                </option>
                            {/foreach}
                        </select>
						<span class="help-block">
                            {__("Select record from added before. You may add new on this psge:")} <a target="_blank" href="/admincp/model/add_model">{__("Click Here")}</a>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">{__("Add New")}</button>
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
	{/if}
</div>
