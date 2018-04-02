<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-flag pr5 panel-icon"></i>
        <strong>{__("Databases")}</strong>
        {if $sub_view == ""} &rsaquo; <strong>{__("Networks")}</strong>{/if}
        {if $sub_view == "server"} &rsaquo; <strong>{__("Servers")}</strong>{/if}
	    {if $sub_view == "record"} &rsaquo; <strong>{__("Records")}</strong>{/if}

        {if $sub_view == ""}
			<div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/database/add_network" class="btn btn-primary">
                    <i class="fa fa-plus"></i> {__("Add New Network")}
                </a>
            </div>
        {/if}
        {if $sub_view == "server"}
			<div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/database/add_server" class="btn btn-primary">
                    <i class="fa fa-plus"></i> {__("Add New Server")}
                </a>
            </div>
        {/if}
        {if $sub_view == "record"}
			<div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/database/add_record" class="btn btn-primary">
                    <i class="fa fa-plus"></i> {__("Add New Record")}
                </a>
            </div>
        {/if}
		{if $sub_view == "edit_record" || $sub_view == "add_record"}
			<div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/database/record" class="btn btn-primary">
                    <i class="fa fa-backward"></i> {__("Return")}
                </a>
            </div>
        {/if}
		{if $sub_view == "edit_server" || $sub_view == "add_server"}
			<div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/database/server" class="btn btn-primary">
                    <i class="fa fa-backward"></i> {__("Return")}
                </a>
            </div>
        {/if}
		{if $sub_view == "edit_network" || $sub_view == "add_network"}
			<div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/database" class="btn btn-primary">
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
                            <th>{__("Name")}</th>
							<th>{__("Admin")}</th>
							<th>{__("Protect")}</th>
            			    <th>{__("Availability")}</th>
                            <th>{__("Actions")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
							<td>{$row['admin']}</td>
							<td>{$row['protect']}</td>
		            	    <td>{if $row['available']} {__("Yes")} {else} {__("No")} {/if}</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='{__("Delete")}' class="btn btn-xs btn-danger js_admin-deleter" data-handle="network" data-id="{$row['id']}">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='{__("Edit")}' href="{$system['system_url']}/admincp/database/edit_network/{$row['id']}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {elseif $sub_view == "add_network"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/database.php?do=add_network">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
                    </div>
                </div>

				<label class="col-sm-3 control-label text-left">
                    {__("Admin")}
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
                        {__("Select user from list")}
                    </span>
                </div>

				<label class="col-sm-3 control-label text-left">
                    {__("Protect")}
                </label>
                <div class="col-sm-9">
                    <select class="form-control selectpicker" name="protect_id">
					<option value="0" selected>
                         No protect
                    </option>
                {foreach $rows_protect as $row_protect}
		                    <option value="{$row_protect['id']}">
                                {$row_protect['name']}
                            </option>
			            {/foreach}
    	            </select>
					<span class="help-block">
                        {__("Select protect from list")}
                    </span>
                </div>
				
                <label class="col-sm-3 control-label text-left">
                    {__("Available")}
                </label>
                <div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available">
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        {__("Make this network available for players")}
                    </span>
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
    {elseif $sub_view == "edit_network"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/database.php?do=edit_network&id={$data['id']}">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name" value="{$data['name']}">
                    </div>
                </div>
				
    			<label class="col-sm-3 control-label text-left">
                    {__("Admin")}
                </label>
                <div class="col-sm-9">
                    <select class="form-control selectpicker" name="user_id">
                        {foreach $rows_users as $row_users}
		                    <option value="{$row_users['user_id']}" {if $row_users['user_id'] == $data['admin_id']}selected{/if}>
                                {$row_users['user_name']}
                            </option>
			            {/foreach}
    	            </select>
					<span class="help-block">
                        {__("Select user from list")}
                    </span>
                </div>
				
				<label class="col-sm-3 control-label text-left">
                    {__("Protect")}
                </label>
                <div class="col-sm-9">
                    <select class="form-control selectpicker" name="protect_id">
					    <option value="0" {if $row_protect['id'] == '0'}selected{/if}>
                            No protect
                        </option>
                        {foreach $rows_protect as $row_protect}
		                    <option value="{$row_protect['id']}" {if $row_protect['id'] == $data['protect_id']}selected{/if}>
                                {$row_protect['name']}
                            </option>
			            {/foreach}
    	            </select>
					<span class="help-block">
                        {__("Select protect from list")}
                    </span>
                </div>

				<label class="col-sm-3 control-label text-left">
                    {__("Available")}
                </label>
                <div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available" {if $data['available']}checked{/if}>
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        {__("Make this network available for players")}
                    </span>
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
    {elseif $sub_view == "server"}
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("ID")}</th>
                            <th>{__("Name")}</th>
			                <th>{__("Network")}</th>
							<th>{__("Admin")}</th>
							<th>{__("Protect")}</th>
							<th>{__("Availability")}</th>
                            <th>{__("Actions")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
							<td>{$row['network']}</td>
							<td>{$row['admin']}</td>
							<td>{$row['protect']}</td>
                            <td>{if $row['available']} {__("Yes")} {else} {__("No")} {/if}</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='{__("Delete")}' class="btn btn-xs btn-danger js_admin-deleter" data-handle="server" data-id="{$row['id']}">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='{__("Edit")}' href="{$system['system_url']}/admincp/database/edit_server/{$row['id']}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {elseif $sub_view == "add_server"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/database.php?do=add_server">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
						<span class="help-block">
                            {__("Text name of this server")}
                        </span>
                    </div>

					<label class="col-sm-3 control-label text-left">
                        {__("Admin")}
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
                            {__("Select user from list")}
                        </span>
                    </div>
					
    				<label class="col-sm-3 control-label text-left">
                        {__("Protect")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="protect_id">
		    	    		<option value="0" selected>
                                No protect
                            </option>
                            {foreach $rows_protect as $row_protect}
		                        <option value="{$row_protect['id']}">
                                    {$row_protect['name']}
                                </option>
		                    {/foreach}
    	                </select>
					    <span class="help-block">
                            {__("Select protect from list")}
                        </span>
                    </div>
					
					<label class="col-sm-3 control-label text-left">
                        {__("Network")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="net_id">
			                {foreach $rows_network as $row_network}
			                    <option value="{$row_network['id']}">
                                    {$row_network['name']}
                                </option>
				            {/foreach}
			            </select>
						<span class="help-block">
                            {__("Select user from list")}
                        </span>
                    </div>
				
                    <label class="col-sm-3 control-label text-left">
                        {__("Available")}
                    </label>

					<div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available">
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        {__("Make this network available for players")}
                    </span>
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
    {elseif $sub_view == "edit_server"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/database.php?do=edit_server&id={$data['id']}">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name" value="{$data['name']}">
						<span class="help-block">
                            {__("Text name of this server")}
                        </span>
                    </div>

					<label class="col-sm-3 control-label text-left">
                        {__("Admin")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="user_id">
			                {foreach $rows_users as $row_users}
			                    <option value="{$row_users['user_id']}" {if $row_users['user_id'] == $data['admin_id']}selected{/if}>
                                    {$row_users['user_name']}
                                </option>
				            {/foreach}
			            </select>
						<span class="help-block">
                            {__("Select user from list")}
                        </span>
                    </div>
					
					<label class="col-sm-3 control-label text-left">
                        {__("Protect")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="protect_id">
					        <option value="0" {if $row_protect['id'] == '0'}selected{/if}>
                                No protect
                            </option>
                            {foreach $rows_protect as $row_protect}
		                        <option value="{$row_protect['id']}" {if $row_protect['id'] == $data['protect_id']}selected{/if}>
                                    {$row_protect['name']}
                                </option>
			                {/foreach}
    	                </select>
					    <span class="help-block">
                            {__("Select protect from list")}
                        </span>
                    </div>
					
					<label class="col-sm-3 control-label text-left">
                        {__("Network")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="net_id">
			                {foreach $rows_network as $row_network}
			                    <option value="{$row_network['id']}" {if $row_network['id'] == $data['net_id']}selected{/if}>
                                    {$row_network['name']}
                                </option>
				            {/foreach}
			            </select>
						<span class="help-block">
                            {__("Select user from list")}
                        </span>
                    </div>
				
                    <label class="col-sm-3 control-label text-left">
                        {__("Available")}
                    </label>

					<div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available" {if $data['available']}checked{/if}>
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        {__("Make this network available for players")}
                    </span>
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
    {elseif $sub_view == "record"}
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("ID")}</th>
							<th>{__("Name")}</th>
                            <th>{__("Server")}</th>
							<th>{__("Text")}</th>
			                <th>{__("Availability")}</th>
                            <th>{__("Actions")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                        <tr>
                            <td>{$row['id']}</td>
							<td>{$row['name']}</td>
                            <td>{$row['server']}</td>
							<td>{$row['text']}</td>
			                <td>{if $row['available']} {__("Yes")} {else} {__("No")} {/if}</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='{__("Delete")}' class="btn btn-xs btn-danger js_admin-deleter" data-handle="record" data-id="{$row['id']}">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='{__("Edit")}' href="{$system['system_url']}/admincp/database/edit_record/{$row['id']}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {elseif $sub_view == "add_record"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/database.php?do=add_record">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
						<span class="help-block">
                            {__("Text name of this server")}
                        </span>
                    </div>

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
                            {__("Select server from list")}
                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label">
                        {__("Text")}
                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="text" rows="3"></textarea>
                        <span class="help-block">
                            {__("The text of this new record")}
                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label text-left">
                        {__("Available")}
                    </label>

					<div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available">
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        {__("Make this network available for players")}
                    </span>
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
    {elseif $sub_view == "edit_record"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/database.php?do=edit_record&id={$data['id']}">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name" value="{$data['name']}">
						<span class="help-block">
                            {__("Text name of this server")}
                        </span>
                    </div>

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
                            {__("Select server from list")}
                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label">
                        {__("Text")}
                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="text" rows="3">{$data['text']}</textarea>
                        <span class="help-block">
                            {__("The text of this record")}
                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label text-left">
                        {__("Available")}
                    </label>

					<div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available" {if $data['available']}checked{/if}>
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        {__("Make this record available for players")}
                    </span>
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
    {/if}
</div>
