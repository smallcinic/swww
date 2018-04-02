<?php

/**
 * database
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

	$user_net = get_user_net();
    foreach($user_net as $net){
		$a[]=$net['id'];
	}

	    if ($_GET['view'] == '' ) {
		    // page header
			page_header(__("Database"));
			
			//get data
            //$user_net = get_user_net();
			
			/* assign variables */
            $smarty->assign('user_net', $user_net);
		} elseif (in_array($_GET['view'],$a) AND $_GET['sub_view'] == '' ) {

            // page header
            page_header(__("Database"));
			
			//get data
            //$user_net = get_user_net();
			$user_servers = get_user_servers($_GET['view']);
			$user_records = get_user_records(0);

            /* assign variables */
            $smarty->assign('user_net', $user_net);
            $smarty->assign('user_servers', $user_servers);
			$smarty->assign('user_records', $user_records);
        } elseif (in_array($_GET['view'],$a) AND in_array($_GET['sub_view'],$b)) {
			    _error(404);
		} else {
			_error(404);
		}

	/* assign variables */
	$smarty->assign('view', $_GET['view']);
	
} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page footer
page_footer("database");

?>
