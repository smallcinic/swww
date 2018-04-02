<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-flag pr5 panel-icon"></i>
        <strong>{__("hacking")}</strong>
        {if $sub_view == ""} &rsaquo; <strong>{__("ices")}</strong>{/if}
        {if $sub_view == "icebreaker"} &rsaquo; <strong>{__("icebreakers")}</strong>{/if}
	    {if $sub_view == "firewall"} &rsaquo; <strong>{__("firewalls")}</strong>{/if}

        {if $sub_view == ""}
			<div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/hacking/add_ice" class="btn btn-primary">
                    <i class="fa fa-plus"></i> {__("Add New ice")}
                </a>
            </div>
        {/if}
        {if $sub_view == "icebreaker"}
			<div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/hacking/add_icebreaker" class="btn btn-primary">
                    <i class="fa fa-plus"></i> {__("Add New icebreaker")}
                </a>
            </div>
        {/if}
        {if $sub_view == "firewall"}
			<div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/hacking/add_firewall" class="btn btn-primary">
                    <i class="fa fa-plus"></i> {__("Add New firewall")}
                </a>
            </div>
        {/if}
		{if $sub_view == "edit_firewall" || $sub_view == "add_firewall"}
			<div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/hacking/firewall" class="btn btn-primary">
                    <i class="fa fa-backward"></i> {__("Return")}
                </a>
            </div>
        {/if}
		{if $sub_view == "edit_icebreaker" || $sub_view == "add_icebreaker"}
			<div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/hacking/icebreaker" class="btn btn-primary">
                    <i class="fa fa-backward"></i> {__("Return")}
                </a>
            </div>
        {/if}
		{if $sub_view == "edit_ice" || $sub_view == "add_ice"}
			<div class="pull-right flip">
                <a href="{$system['system_url']}/admincp/hacking" class="btn btn-primary">
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
                            <th>{__("Code")}</th>
							<th>{__("Count")}</th>
							<th>{__("Name")}</th>
            			    <th>{__("Level")}</th>
            			    <th>{__("Url")}</th>
							<th>{__("Username")}</th>
                            <th>{__("Actions")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['code']}</td>
							<td>{$row['count']}</td>
							<td>{$row['name']}</td>
							<td>{$row['level']}</td>
							<td>{$row['url']}</td>
							<td>{$row['user_name']}</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='{__("Delete")}' class="btn btn-xs btn-danger js_admin-deleter" data-handle="ice" data-id="{$row['id']}">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='{__("Edit")}' href="{$system['system_url']}/admincp/hacking/edit_ice/{$row['id']}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {elseif $sub_view == "add_ice"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/hacking.php?do=add_ice">
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
                        {__("Make this ice available for players")}
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
    {elseif $sub_view == "edit_ice"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/hacking.php?do=edit_ice&id={$data['id']}">
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
                        {__("Make this ice available for players")}
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
    {elseif $sub_view == "icebreaker"}
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("ID")}</th>
                            <th>{__("Code")}</th>
							<th>{__("Numbers")}</th>
							<th>{__("Operations")}</th>
            			    <th>{__("Owner")}</th>
            			    <th>{__("Active")}</th>
                            <th>{__("Actions")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $rows as $row}
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['code']}</td>
							<td>{$row['nums']}</td>
							<td>{$row['op']}</td>
							<td>{$row['user_name']}</td>
		            	    <td>{if $row['active']} {__("Yes")} {else} {__("No")} {/if}</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='{__("Delete")}' class="btn btn-xs btn-danger js_admin-deleter" data-handle="ice" data-id="{$row['id']}">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='{__("Edit")}' href="{$system['system_url']}/admincp/hacking/edit_ice/{$row['id']}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {elseif $sub_view == "add_icebreaker"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/hacking.php?do=add_icebreaker">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
						<span class="help-block">
                            {__("Text name of this icebreaker")}
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
                        {__("ice")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="net_id">
			                {foreach $rows_ice as $row_ice}
			                    <option value="{$row_ice['id']}">
                                    {$row_ice['name']}
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
                        {__("Make this ice available for players")}
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
    {elseif $sub_view == "edit_icebreaker"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/hacking.php?do=edit_icebreaker&id={$data['id']}">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name" value="{$data['name']}">
						<span class="help-block">
                            {__("Text name of this icebreaker")}
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
                        {__("ice")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="net_id">
			                {foreach $rows_ice as $row_ice}
			                    <option value="{$row_ice['id']}" {if $row_ice['id'] == $data['net_id']}selected{/if}>
                                    {$row_ice['name']}
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
                        {__("Make this ice available for players")}
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
    {elseif $sub_view == "firewall"}
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("ID")}</th>
							<th>{__("Name")}</th>
                            <th>{__("icebreaker")}</th>
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
                            <td>{$row['icebreaker']}</td>
							<td>{$row['text']}</td>
			                <td>{if $row['available']} {__("Yes")} {else} {__("No")} {/if}</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='{__("Delete")}' class="btn btn-xs btn-danger js_admin-deleter" data-handle="firewall" data-id="{$row['id']}">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='{__("Edit")}' href="{$system['system_url']}/admincp/hacking/edit_firewall/{$row['id']}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {elseif $sub_view == "add_firewall"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/hacking.php?do=add_firewall">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
						<span class="help-block">
                            {__("Text name of this icebreaker")}
                        </span>
                    </div>

					<label class="col-sm-3 control-label text-left">
                        {__("icebreaker")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="icebreaker_id">
			                {foreach $rows_icebreaker as $row_icebreaker}
			                    <option value="{$row_icebreaker['id']}">
                                    {$row_icebreaker['name']}
                                </option>
				            {/foreach}
			            </select>
						<span class="help-block">
                            {__("Select icebreaker from list")}
                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label">
                        {__("Text")}
                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="text" rows="3"></textarea>
                        <span class="help-block">
                            {__("The text of this new firewall")}
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
                        {__("Make this ice available for players")}
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
    {elseif $sub_view == "edit_firewall"}
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/hacking.php?do=edit_firewall&id={$data['id']}">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        {__("Name")}
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name" value="{$data['name']}">
						<span class="help-block">
                            {__("Text name of this icebreaker")}
                        </span>
                    </div>

					<label class="col-sm-3 control-label text-left">
                        {__("icebreaker")}
                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="icebreaker_id">
			                {foreach $rows_icebreaker as $row_icebreaker}
			                    <option value="{$row_icebreaker['id']}">
                                    {$row_icebreaker['name']}
                                </option>
				            {/foreach}
			            </select>
						<span class="help-block">
                            {__("Select icebreaker from list")}
                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label">
                        {__("Text")}
                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="text" rows="3">{$data['text']}</textarea>
                        <span class="help-block">
                            {__("The text of this firewall")}
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
                        {__("Make this firewall available for players")}
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
