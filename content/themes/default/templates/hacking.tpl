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

            <!-- tabs -->
            <div class="box-tabs-wrapper clearfix">
                <ul class="nav pull-left flip">
                    <li {if $view == ""}class="active"{/if}>
                        <a href="{$system['system_url']}/hacking">{__("Console")}</a>
                    </li>
                    <li {if $view == "ice"}class="active"{/if}>
                        <a href="{$system['system_url']}/hacking/ice">{__("Your ices")}</a>
                    </li>
					<li {if $view == "privacy"}class="active"{/if}>
                        <a href="{$system['system_url']}/hacking/privacy">{__("Your privacy")}</a>
                    </li>
					<li {if $view == "hacked"}class="active"{/if}>
                        <a href="{$system['system_url']}/hacking/hacked">{__("Your available services")}</a>
                    </li>
                </ul>
            </div>
            <!-- tabs -->
            
            <!-- content -->
			{if $view == ""}
			<form  action="hacking.php" method="POST">
			    <div>
				    <input name="comand" type="text" placeholder="Поле для ввода команды" autofocus  autocomplete="off"><input name="submit_comand" type="submit" value="Выполнить">
				</div>
			</form>
			<div class="col-sm-8 col-md-10 console"><p></p></div>
			{/if}
            <!-- content -->

        </div>
        <!-- right panel -->

    </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}