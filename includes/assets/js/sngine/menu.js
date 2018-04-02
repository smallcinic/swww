/**
 * admin js
 * 
 * @package Sngine
 * @author Zamblek
 */

api['models/delete']  = ajax_path+"models/delete.php";

$(function() {

	// run DataTable
    $('.js_dataTable').DataTable();


    // run metisMenu
    $(".js_metisMenu").metisMenu();

    // run user record deleter
    $('body').on('click', '.js_record-deleter', function () {
        var handle = $(this).data('handle');
        var id = $(this).data('id');
        var node = $(this).data('node');
        confirm(__['Delete'], __['Are you sure you want to delete this?'], function() {
            $.post(api['models/delete'], {'handle': handle, 'id': id, 'node': node}, function(response) {
                /* check the response */
                if(response.callback) {
                    eval(response.callback);
                } else {
                    window.location.reload();
                }
            }, 'json')
            .fail(function() {
                modal('#modal-message', {title: __['Error'], message: __['There is something that went wrong!']});
            });
        });
    });

});
