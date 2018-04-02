<?php

/**
 * models
 * 
 * @package hplus
 * @author cinic
 */

// fetch bootstrap
require('bootstrap.php');
loggetpost();

// check if models enabled
if(!$system['models_enabled']) {
    _error(404);
}

// user access
user_access();

try {

	// get view content
	switch ($_GET['view']) {
		case '':

			// page header
			page_header(__("Models"));
			// get models
			$models = get_models();
			/* assign variables */
			$smarty->assign('models', $models);
			$smarty->assign('get', "models");

			break;
		
        case 'database':

            // page header
            page_header(__("Database"));
			
			//get data
            $user_net = get_user_net();
			$user_servers = get_user_servers();
			$user_records = get_user_records();

            /* assign variables */
            $smarty->assign('user_net', $user_net);
            $smarty->assign('user_servers', $user_servers);
			$smarty->assign('user_recorde', $user_records);
			
            break;

		default:
			_error(404);
			break;
	}
	/* assign variables */
	$smarty->assign('view', $_GET['view']);
	
} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page footer
page_footer("models");

?>
