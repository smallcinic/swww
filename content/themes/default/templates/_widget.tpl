{if $widgets}
<!-- Widgets -->
{foreach $widgets as $widget}
	<div class="panel panel-default panel-widget">
	    <div class="panel-heading">
	        <strong>{$widget['title']}</strong>
	    </div>
	    <div class="panel-body">{$widget['code']}</div>
	</div>
{/foreach}
<!-- Widgets -->
{/if}