{if $offline}

    <div class="chat-head-title">
        <i class="fa fa-user-secret"></i>
        {__("Offline")}
    </div>

{else}

    <div class="chat-head-title">
        <i class="fa fa-circle"></i>
        ({count($online_friends)})
    </div>

{/if}