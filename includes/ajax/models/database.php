<?php
/**
 * ajax -> posts -> article
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true);

loggetpost();

// (create|edit) article
try {

	// initialize the return array
	$return = array();
	$return['callback'] = 'window.location.replace(response.path);';

	switch ($_GET['do']) {
		case 'add_record':
            $db->query(sprintf("INSERT INTO db_record (name, server_id, text, available) VALUES (%s,%s,%s,1)", secure($_POST['name']), secure($_POST['server_id']), secure($_POST['text']) )) or _error(SQL_ERROR_THROWEN);
    		return_json( array('callback' => 'window.location.reload();') );
			break;

		case 'edit_record':
			/* check id */
			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
				_error(400);
			}
			/* edit article */
			    $db->query(sprintf("UPDATE db_record SET text = %s WHERE id = %s", secure($_POST['text']), secure($_GET['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
				return_json();
			break;
		
		default:
			_error(400);
			break;
	}

	// return & exit
	return_json($return);
	
} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>