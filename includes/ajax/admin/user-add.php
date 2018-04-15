<?php
/**
 * ajax -> admin -> users
 * 
 * @package Hplus
 * @author Moe
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();


// check admin logged in
if(!$user->_logged_in || !$user->_is_admin) {
	modal(MESSAGE, __("System Message"), __("You don't have the right permission to access this"));
}


try {

	switch ($_GET['do']) {
		case 'add_user':
            $db->query(sprintf(
                "INSERT INTO users (user_name, user_email, user_password, user_registered)
                VALUES 
                    (%s, %s, %s, %s)",
                    secure($_POST['user_name']),
                    secure(bin2hex(openssl_random_pseudo_bytes(10))),
                    secure(_password_hash($_POST['user_password'])),
                    secure($date)))
            or _error('SQL_ERROR_THROWEN');
            return_json( array('callback' => 'window.location = "'.$system['system_url'].'/admincp/users";') );
            break;
		
		default:
			_error(400);
			break;
	}

} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>