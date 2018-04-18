<?php
/**
 * hacking
 * 
 * @package hplus
 * @author cinic
 */

// fetch bootstrap
require('bootstrap.php');


// user access
user_access();

try {

	// get view content
	switch ($_GET['view']) {
		case '':

			// page header
			page_header(__("Hacking"));
	        
			
			
			break;

		case 'ice':

			// page header
			page_header(__("Hacking"));
	
			break;
			
		case 'privacy':

			// page header
			page_header(__("Hacking"));
	
			break;
			
		case 'hacked':

			// page header
			page_header(__("Hacking"));
	
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
page_footer("hacking");

?>