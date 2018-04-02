{include file='_head.tpl'}
{include file='_header.tpl'}

{if !$user->_logged_in}
    <!-- page content -->
    <div class="index-wrapper" {if !$system['system_wallpaper_default'] && $system['system_wallpaper']} style="background-image: url('{$system['system_uploads']}/{$system['system_wallpaper']}')" {/if}>
        <div class="container">
            <div class="index-intro">
                <h1>
                    {__("Welcome to")} {$system['system_title']}
                </h1>
                <p>
                    {__("Share your memories, connect with others, make new friends")}
                </p>
            </div>

            <div class="row relative">
                
                {if $random_profiles}
                    <!-- random 4 users -->
                    {foreach $random_profiles as $random_profile}
                        <a href="{$system['system_url']}/{$random_profile['user_name']}" class="fly-head" 
                            {if $random_profile@index == 0} style="top: 140px;left: 50px;" {/if}
                            {if $random_profile@index == 1} style="bottom: 60px;left: 210px;" {/if}
                            {if $random_profile@index == 2} style="top: 140px;right: 50px;" {/if}
                            {if $random_profile@index == 3} style="bottom: 60px;right: 210px;" {/if}
                            data-toggle="tooltip" data-placement="top" title="{$random_profile['user_firstname']} {$random_profile['user_lastname']}">
                            <img src="{$random_profile['user_picture']}">
                        </a>
                    {/foreach}
                    <!-- random 4 users -->
                {/if}

                <!-- sign in/up form -->
                {include file='_sign_form.tpl'}
                <!-- sign in/up form -->
            </div>
        </div>
    </div>

    {if $system['directory_enabled']}
        {include file='_directory.tpl'}
    {/if}
    <!-- page content -->
{else}
    <!-- page content -->
    <div class="container mt20 offcanvas">
        <div class="row">

            <!-- left panel -->
            <div class="col-sm-4 col-md-2 offcanvas-sidebar">
                {include file='_sidebar.tpl'}
            </div>
            <!-- left panel -->

            <div class="col-sm-8 col-md-10 offcanvas-mainbar">
                <div class="row">
                    <!-- center panel -->
                    <div class="col-sm-12 col-md-12">

                        <!-- announcments -->
                        {include file='_announcements.tpl'}
                        <!-- announcments -->

                        {if $view == ""}

                            <!-- stories -->
                            {if $system['stories_enabled']}
                                <div class="panel panel-default panel-users">
                                    <div class="panel-heading light no_border">
                                        <strong class="text-muted">{__("Stories")}</strong>
                                        <div class="x-muted text-clickable pull-right flip">
                                            <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title='{__("Stories are photos and videos that only last 24 hours")}'></i>
                                        </div>
                                        
                                    </div>
                                    <div class="panel-body pt5">
                                        <div class="row">
                                            <!-- add new story -->
                                            <div class="col-xs-2">
                                                <div class="user-picture" data-toggle="modal" data-url="posts/story.php?do=create" style="background-image:url({$user->_data['user_picture']});">
                                                    <div class="add">
                                                        <i class="fa fa-plus-circle"></i>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- add new story -->

                                            <!-- users stories -->
                                            {foreach $stories as $story}
                                                <div class="col-xs-2">
                                                    <div class="user-picture-wrapper">
                                                        <div class="user-picture js_story" style="background-image:url({$story['user_picture']});" data-items='{$story["media"]}' data-toggle="tooltip" data-placement="top" title='{__("Watch")} {$story["user_firstname"]} {$story["user_lastname"]} {__("Story")}'>
                                                        </div>    
                                                    </div>
                                                </div>
                                            {/foreach}
                                            <!-- users stories -->
                                        </div>
                                    </div>
                                </div>
                            {/if}
                            <!-- stories -->

                            <!-- publisher -->
                            {include file='_publisher.tpl' _handle="me" _privacy=true}
                            <!-- publisher -->

                            <!-- boosted post -->
                            {if $boosted_post}
                                {include file='_boosted_post.tpl' post=$boosted_post}
                            {/if}
                            <!-- boosted post -->

                            <!-- posts stream -->
                            {include file='_posts.tpl' _get="newsfeed"}
                            <!-- posts stream -->

                        {elseif $view == "saved"}
                            <!-- saved posts stream -->
                            {include file='_posts.tpl' _get="saved" _title=__("Saved Posts")}
                            <!-- saved posts stream -->

                        {elseif $view == "articles"}
                            <!-- saved posts stream -->
                            {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="article" _title=__("My Articles")}
                            <!-- saved posts stream -->

                        {elseif $view == "products"}
                            <!-- saved posts stream -->
                            {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="product" _title=__("My Products")}
                            <!-- saved posts stream -->

                        {/if}
                    </div>
                    <!-- center panel -->

                </div>
            </div>

        </div>
    </div>
    <!-- page content -->
{/if}

{include file='_footer.tpl'}
