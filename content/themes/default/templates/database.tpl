{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
<div class="container offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-sm-4 col-md-2 offcanvas-sidebar mt20">
            {include file='_sidebar.tpl'}
        </div>
        <!-- left panel -->

        <!-- right panel -->
		<div class="col-sm-8 col-md-10 offcanvas-mainbar mt20">
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-default">
					
						<!-- tabs -->
						<div class="panel-heading with-nav">
							<ul class="nav nav-tabs">
								<li {if $view == ''}class="active"{/if}>
									<a href="{$system['system_url']}/database/">{__("FAQ")}</a>
								</li>
								{if count($user_net) > 0}
									{foreach $user_net as $net}
										<li {if $view == $net['id']}class="active"{/if}>
											<a href="{$system['system_url']}/database/{$net['id']}/">
												{$net['name']}
											</a>
										</li>
									{/foreach}
								{/if}
							</ul>
						</div>
						<!-- tabs -->
				
						<!-- content -->
						
						<div class="panel-body">
							{if $view == ''}
								<p class="text-center text-muted mt10">
									{__("Select network")}
								</p>
							{else}
                                <ul class="side-nav metismenu js_metisMenu">

    								<!-- Servers -->
									{foreach $user_servers as $user_server}
									    <li>
                                            <a href="{$system['system_url']}/database/{$view}">
                                                <i class="fa fa-desktop fa-fw fa-lg pr10"></i>{$user_server['name']}
                                                <span class="fa arrow"></span>
                                            </a>
							                <ul>
                                                <!-- Records-->
											    {foreach $user_records as $user_record}
				    							    {if $user_record['server_id'] == $user_server['id']}
        			        							<li>
                                                            <a href="{$system['system_url']}/database/{$view}">
                                                                <i class="fa fa-cubes fa-fw pr10"></i>{__("{$user_record['name']}")}
																<span class="fa arrow"></span>
                                                            </a>
															<ul>
															    <li>
                                                                    <form class="js_ajax-forms form-horizontal" data-url="models/database.php?do=edit_record&id={$user_record['id']}">
                                                                        <div class="form-group">
                                                                            <div class="col-sm-9 col-sm-offset-1">
                                                                                <textarea class="form-control" name="text" rows="3" {if $user_record['access'] == "r"}readonly{/if}>{$user_record['text']}</textarea>
                                                                            </div>
                                                                        </div>
 
																		{if $user_record['access'] == "f" || $user_record['admin'] == $user->_data['user_id']}
                                                                        <div class="form-group">
                                                                            <div class="col-sm-9 col-sm-offset-1">
                                                                                <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
                                                                                <button type="button" class="btn btn-danger js_record-deleter" data-handle="record" data-id="{$user_record['id']}">{__("Remove record")}</button>
																			  </div>
																		</div>

                                                                        {/if}
																		{if $user_record['access'] == "w"}
                                                                        <div class="form-group">
                                                                            <div class="col-sm-9 col-sm-offset-1">
                                                                                <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
                                                                            </div>
                                                                        </div>
                                                                        {/if}

                                                                        <!-- success -->
                                                                        <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                                                        <!-- success -->

                                                                        <!-- error -->
                                                                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                                                        <!-- error -->
                                                                    </form>
																</li>
															</ul>
                                                        </li>
														
        											{/if}
		    									{/foreach}
												
        			        					<li>
                                                    <a href="{$system['system_url']}/database/{$view}">
                                                        <i class="fa fa-cubes fa-fw pr10"></i>{__("Add New Record")}
													    <span class="fa arrow"></span>
                                                    </a>
													<ul>
													    <li>
                                                            <form class="js_ajax-forms form-horizontal" data-url="models/database.php?do=add_record">
															    <div class="form-group">
   															    	<div class="col-sm-9 col-sm-offset-1">
																	    <input type="hidden" name="server_id" value="{$user_server['id']}">
                                                                    	<span class="help-block">
                                                                            {__("Text name of this record")}
                                                                        </span>
                                                                        <input class="form-control" name="name">
                                                                    </div>

                                                                    <div class="col-sm-9 col-sm-offset-1">
                                                                        <span class="help-block">
                                                                            {__("The text of this new record")}
                                                                        </span>
    																	<textarea class="form-control" name="text" rows="3"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="col-sm-9 col-sm-offset-3">
                                                                        <button type="submit" class="btn btn-primary">{__("Add Record")}</button>
                                                                    </div>
                                                                </div>

                                                                <!-- success -->
                                                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                                                <!-- success -->

                                                                <!-- error -->
                                                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                                                <!-- error -->
                                                            </form>
														</li>
													</ul>
                                                </li>
			    								<!-- Records-->
                                            </ul>
                                        </li>
									{/foreach}

										<!-- Servers -->

								</ul>						
							{/if}
						</div>
						<!-- content -->

					</div>
				</div>
			</div>
		</div>
		<!-- right panel -->
	</div>
</div>
<!-- page content -->



{include file='_footer.tpl'}
