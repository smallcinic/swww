<div class="panel panel-default panel-messages" data-cid={$conversation['conversation_id']}>
    <div class="panel-heading clearfix">
        <div class="pull-right flip">
            <a class="btn btn-primary js_chat-start" href="{$system['system_url']}/messages/new">
                <i class="fa fa-comment-o"></i>
                {__("New Message")}
            </a>
            <button type="button" class="btn btn-danger js_delete-conversation">
                <i class="fa fa-trash-o"></i>
                {__("Delete")}
            </button>
        </div>
        <div class="mt5">
            {if !$conversation['multiple_recipients']}
                {$conversation['name_html']}
            {else}
                <span title="{$conversation['name_list']}">{$conversation['name']}</span>
            {/if}
        </div>
    </div>
    <div class="panel-body">
        <div class="chat-conversations js_scroller" data-slimScroll-height="367px" data-slimScroll-start="bottom">
            {include file='ajax.chat.conversation.messages.tpl'}
        </div>
        <div class="chat-attachments attachments clearfix x-hidden">
            <ul>
                <li class="loading">
                    <div class="loader loader_small"></div>
                </li>
            </ul>
        </div>
        <div class="chat-form-container">
            <div class="x-form chat-form">
                <div class="chat-form-message">
                    <textarea class="js_autosize js_post-message" placeholder='{__("Write a message")}'></textarea>
                </div>
                <div class="x-form-tools">
                    <div class="x-form-tools-attach">
                        <i class="fa fa-camera js_x-uploader" data-handle="chat"></i>
                    </div>
                    <div class="x-form-tools-emoji js_emoji-menu-toggle">
                        <i class="fa fa-smile-o fa-lg"></i>
                    </div>
                    {include file='_emoji-menu.tpl'}
                </div>
            </div>
        </div>
    </div>
</div>