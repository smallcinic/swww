<ul>
    {foreach $sidebar_friends as $_user}
    <li class="feeds-item">
        <div class="data-container clickable small js_chat-start" data-uid="{$_user['user_id']}" data-name="{$_user['user_firstname']} {$_user['user_lastname']}" data-picture="{$_user['user_picture']}">
            <img class="data-avatar" src="{$_user['user_picture']}" alt="{$_user['user_firstname']} {$_user['user_lastname']}">
            <div class="data-content">
                <div class="pull-right flip">
                    <i class="fa fa-circle {if $_user['user_is_online'] }chat-sidebar-online{else}chat-sidebar-offline{/if}"></i>
                </div>
                <div>
                    <strong>{$_user['user_firstname']} {$_user['user_lastname']}</strong>
                    {if $system['chat_status_enabled'] && $_user['user_last_login']}
                        <br>
                        <small>
                            {{__("Last Seen")}} <span class="js_moment" data-time="{$_user['user_last_login']}">{$_user['user_last_login']}</span>
                        </small>
                    {/if}
                </div>
            </div>
        </div>
    </li>
    {/foreach}
</ul>