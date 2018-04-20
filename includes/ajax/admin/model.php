<?php
/**
 * ajax -> admin -> model
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();


// check admin logged in
if(!$user->_logged_in || !$user->_is_admin) {
	modal(MESSAGE, __("System Message"), __("You don't have the right permission to access this"));
}

// edit model
try {

	switch ($_GET['do']) {
		case 'add_model':
			/* insert */
			$db->query(sprintf("INSERT INTO model (name) VALUES (%s)", secure($_POST['model_name']) )) or _error(SQL_ERROR_THROWEN);
			/* return */
			return_json( array('callback' => 'window.location = "'.$system['system_url'].'/admincp/model";') );
			break;

		case 'edit_model':
			/* valid inputs */
			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
				_error(400);
			}
			/* update */
			$db->query(sprintf("UPDATE model SET name = %s WHERE id = %s", secure($_POST['model_name']), secure($_GET['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			/* return */
			return_json( array('success' => true, 'message' => __("Model info have been updated")) );
			break;

		case 'add_map':
			/* insert */
			$db->query(sprintf("INSERT IGNORE INTO model_map (user_id, model_id) VALUES (%s,%s)", secure($_POST['user_id']), secure($_POST['model_id']) )) or _error(SQL_ERROR_THROWEN);
                        /* return */
                        return_json( array('success' => true, 'message' => __("Model map have been added")) );
			
			break;

		case 'add_device':
			/* insert */
			$db->query(sprintf("INSERT IGNORE INTO models_device (name, server_id) VALUES (%s,%s)", secure($_POST['name']), secure($_POST['server_id']) )) or _error(SQL_ERROR_THROWEN);
                        /* return */
                        return_json( array('success' => true, 'message' => __("Device have been added")) );
			break;			
		
		case 'edit_device':
			/* valid inputs */
			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
				_error(400);
			}
			/* update */
			$db->query(sprintf("UPDATE models_device SET name=%s, server_id=%s WHERE id = %s", secure($_POST['name']), secure($_POST['server_id']), secure($_GET['id']) )) or _error(SQL_ERROR_THROWEN);
			/* return */
			return_json( array('success' => true, 'message' => __("Device info have been updated")) );
			break;
			
		case 'add_research':
			/* insert */
			$db->query(sprintf("INSERT IGNORE INTO models_research (name, rec1, rec2, rec3) VALUES (%s,%s,%s,%s)", secure($_POST['name']), secure($_POST['rec1']), secure($_POST['rec2']), secure($_POST['rec3']) )) or _error(SQL_ERROR_THROWEN);
                        /* return */
                        return_json( array('success' => true, 'message' => __("Receipt have been added")) );
			break;			
		
		case 'edit_research':
			/* valid inputs */
			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
				_error(400);
			}
			/* update */
			$db->query(sprintf("UPDATE models_research SET name=%s, rec1=%s, rec2=%s, rec3=%s WHERE id = %s", secure($_POST['name']), secure($_POST['rec1']), secure($_POST['rec2']), secure($_POST['rec3']), secure($_GET['id']) )) or _error(SQL_ERROR_THROWEN);
			/* return */
			return_json( array('success' => true, 'message' => __("Device info have been updated ")) );
			break;			
			
		default:
			_error(400);
			break;
	}

} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>
