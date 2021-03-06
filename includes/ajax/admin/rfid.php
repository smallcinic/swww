<?php
/**
 * ajax -> admin -> rfid
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

// edit rfid
try {

	switch ($_GET['do']) {
		case 'edit_rfid':
			/* valid inputs */
			if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
				_error(400);
			}
			/* update */
			if ($_POST['manual_edit']){
                $db->query(sprintf(
                	"UPDATE models_rfid SET model_id = %s, record_id = %s, rfid = %s, manual_edit = 1 WHERE id = %s",
					secure($_POST['model_id']), secure($_POST['record_id']), secure($_POST['rfid']), secure($_GET['id'], 'int') ))
				or _error(SQL_ERROR_THROWEN);
			} else {
                $db->query(sprintf("UPDATE models_rfid SET model_id = %s, record_id = %s WHERE id = %s", secure($_POST['model_id']), secure($_POST['record_id']), secure($_GET['id'], 'int'))) or _error(SQL_ERROR_THROWEN);
            }
			/* return */
			return_json( array('success' => true, 'message' => __("RFID info have been updated")) );
			break;

        case 'add_rfid':
            $db->query(sprintf(
                "INSERT INTO models_rfid (rfid, manual_edit) VALUES (%s, 1)", secure($_POST['rfid'])) )
            or _error(SQL_ERROR_THROWEN);
            /* return */
            return_json( array('callback' => 'window.location = "'.$system['system_url'].'/admincp/rfid";') );
            break;

        default:
			_error(400);
			break;
	}

} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>
