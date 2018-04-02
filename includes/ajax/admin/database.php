<?php
/**
 * ajax -> admin -> database
 * 
 * @package Sngine
 * @author cinic
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check admin logged in
if(!$user->_logged_in || !$user->_is_admin) {
	modal(MESSAGE, __("System Message"), __("You don't have the right permission to access this"));
}


// edit database
try {

	if ($_POST['available'] == "on") {
		$available=1;
	} else {
	    $available=0;
	}

	switch ($_GET['do']) {
		case 'add_network':
			
			/* insert */
			$db->query(sprintf("INSERT INTO db_net (name,admin_id,protect_id,available) VALUES (%s,%s,%s,%s)", secure($_POST['name']), secure($_POST['user_id']), secure($_POST['protect_id']), secure($available) )) or _error(SQL_ERROR_THROWEN);
			/* return */
			return_json( array('callback' => 'window.location = "'.$system['system_url'].'/admincp/database";') );
			break;

		case 'edit_network':
			/* valid inputs */
			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
				_error(400);
			}
			
			/* update */
	        $db->query(sprintf("UPDATE db_net SET name = %s, admin_id = %s, protect_id = %s, available = %s WHERE id = %s", secure($_POST['name']), secure($_POST['user_id']), secure($_POST['protect_id']), secure($available), secure($_GET['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			
			/* return */
			return_json( array('success' => true, 'message' => __("Network info have been updated")) );
			break;

		case 'add_server':
			/* insert */
			$db->query(sprintf("INSERT INTO db_server (name,net_id,admin_id,protect_id,available) VALUES (%s,%s,%s,%s,%s)", secure($_POST['name']), secure($_POST['net_id']), secure($_POST['user_id']), secure($_POST['protect_id']), secure($available) )) or _error(SQL_ERROR_THROWEN);
			/* return */
			return_json( array('callback' => 'window.location = "'.$system['system_url'].'/admincp/database/server";') );
			break;

		case 'edit_server':
			/* valid inputs */
			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
				_error(400);
			}
			/* update */
			$db->query(sprintf("UPDATE db_server SET name = %s, net_id = %s, admin_id = %s, protect_id = %s, available = %s WHERE id = %s", secure($_POST['name']), secure($_POST['net_id']), secure($_POST['user_id']), secure($_POST['protect_id']), secure($available), secure($_GET['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			/* return */
			return_json( array('success' => true, 'message' => __("Server info have been updated")) );
			break;
			
		case 'add_record':
			/* insert */
			$db->query(sprintf("INSERT INTO db_record (name, server_id, text, available) VALUES (%s,%s,%s,%s)", secure($_POST['name']), secure($_POST['server_id']), secure($_POST['text']), secure($available) )) or _error(SQL_ERROR_THROWEN);
			/* return */
			return_json( array('callback' => 'window.location = "'.$system['system_url'].'/admincp/database/record";') );
			break;

		case 'edit_record':
			/* valid inputs */
			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
				_error(400);
			}
			/* update */
			$db->query(sprintf("UPDATE db_record SET name = %s, server_id = %s, text = %s, available = %s WHERE id = %s", secure($_POST['name']), secure($_POST['server_id']), secure($_POST['text']), secure($available), secure($_GET['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			/* return */
			return_json( array('success' => true, 'message' => __("Record have been updated")) );
			break;
		default:
			_error(400);
			break;
	}

} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>
