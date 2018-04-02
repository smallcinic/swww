{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
<div class="container mt20 offcanvas">

    <div class="row">

        <!-- left panel -->
        <div class="col-sm-4 col-md-2 offcanvas-sidebar">
            {include file='_sidebar.tpl'}
        </div>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-sm-8 col-md-10 offcanvas-mainbar">
        <div class="posts-filter"><span>Models</span></div>

		{if $view == ""}
            <!-- tabs -->
			<div class="box-tabs-wrapper clearfix">
    			{if count($models) > 0}
                    <ul class="nav pull-left flip">
					    {foreach $models as $model}
                            <li {if $view == "{$model['name']}"}class="active"{/if}>
                                <a href="{$system['system_url']}/models/{$model['name']|lower}">{$model['name']}</a>
                            </li>
						{/foreach}
                    </ul>
		        {else}
			        <p class="text-center text-muted">
                        {__("No models to show")}
                    </p>
			    {/if}
			</div>
			<!-- tabs -->
         
		{elseif $view == database}
		    <div class="panel-body">
			<!-- tabs -->
			
			<div class="box-tabs-wrapper clearfix">
    			{if count($user_net) > 0}
                    <ul class="nav pull-left flip">
					    {foreach $user_net as $net}
                            <li {if $sub_view == "$net['id']"}class="active"{/if}>
							    <a href="{$system['system_url']}/models/database/{$net['id']}/">
                                    <strong class="pr5">{$sub_view}{$net['id']}{$net['name']}</strong>
								</a>
                            </li>
						{/foreach}
                    </ul>
		        {else}
			        <p class="text-center text-muted">
                        {__("No databases to show")}
                    </p>
			    {/if}
			</div>
			<!-- tabs -->
			<!-- content -->
			<div class="tab-content">
			    {if $sub_view=""}
				    <p class="text-center text-muted">
                        {__("Select database")}
                    </p>
			    {/if}
			</div>
			<!-- content -->
			</div>
		{/if}
            
            <!-- content -->
            <div>

            </div>
            <!-- content -->

        </div>
        <!-- right panel -->

    </div>
</div>
<!-- page content -->
</div>
{include file='_footer.tpl'}
