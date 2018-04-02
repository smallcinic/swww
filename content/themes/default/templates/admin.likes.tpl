<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-flag pr5 panel-icon"></i>
        <strong>{__("Likes")}</strong>
    </div>
    {if $sub_view == ""}
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th>{__("Firstname")} {__("And")} {__("Lastname")}</th>
                            <th>{__("Pages likes")}</th>
                            <th>{__("Comments Likes")}</th>
                            <th>{__("Posts Likes")}</th>
                            <th>{__("Photos Likes")}</th>
                            <th>{__("Pages + Posts + Photos/5 + Comments/10")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $data as $row}
                        <tr>
                            <td><a href="/{$row['user_name']}">{$row['user_firstname']} {$row['user_lastname']}</a></td>
                            <td>{$row['pages_likes']}</td>
                            <td>{$row['comments_likes']}</td>
                            <td>{$row['posts_likes']}</td>
                            <td>{$row['photos_likes']}</td>
                            <td>{$row['pages_likes']+$row['posts_likes']+$row['photos_likes']/5+$row['comments_likes']/10}</td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {/if}
</div>
