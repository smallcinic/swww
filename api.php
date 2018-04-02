<?php
/**
 * api
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('bootstrap.php');

// valid inputs
if(!isset($_GET['query']) || is_empty($_GET['query'])) {
	return_json( array('error' => true, 'message' => "Bad Request, query is missing") );
}


// get data
try {

	// initialize the return array
	$return = array();

	switch ($_GET['get']) {
		case 'users':
			/* get users */
			$get_users = $db->query(sprintf('SELECT user_id, user_name, user_firstname, user_gender, user_picture, user_cover, user_registered, user_verified FROM users WHERE user_name LIKE %1$s OR user_firstname LIKE %1$s ORDER BY user_firstname ASC LIMIT %2$s', secure($_GET['query'], 'search'), secure($system['max_results'], 'int', false) )) or _error(SQL_ERROR_THROWEN);
			if($get_users->num_rows > 0) {
				while($user = $get_users->fetch_assoc()) {
					$user['user_picture'] = User::get_picture($user['user_picture'], $user['user_gender']);
					$return[] = $user;
				}
			}
			break;

		case 'pages':
			/* get pages */
			$get_pages = $db->query(sprintf('SELECT * FROM pages WHERE page_name LIKE %1$s OR page_title LIKE %1$s ORDER BY page_title ASC LIMIT %2$s', secure($_GET['query'], 'search'), secure($system['max_results'], 'int', false) )) or _error(SQL_ERROR_THROWEN);
			if($get_pages->num_rows > 0) {
				while($page = $get_pages->fetch_assoc()) {
					$page['page_picture'] = User::get_picture($page['page_picture'], 'page');
					$return[] = $page;
				}
			}
			break;

		case 'groups':
			/* get groups */
			$get_groups = $db->query(sprintf('SELECT * FROM groups WHERE group_name LIKE %1$s OR group_title LIKE %1$s ORDER BY group_title ASC LIMIT %2$s', secure($_GET['query'], 'search'), secure($system['max_results'], 'int', false) )) or _error(SQL_ERROR_THROWEN);
			if($get_groups->num_rows > 0) {
				while($group = $get_groups->fetch_assoc()) {
					$group['group_picture'] = User::get_picture($group['group_picture'], 'group');
					$return[] = $group;
				}
			}
			break;
			
		case 'model':
			switch ($_GET['query']) {
				case 'research':
					$get_research = $db->query(sprintf('SELECT * FROM model_rfid WHERE model = "research" AND rfid = %1$s', secure($_GET['rfid']) )) or _error(SQL_ERROR_THROWEN);
                        		if($get_research->num_rows > 0) {
		                                while($research = $get_research->fetch_assoc()) {
                        	                print $research['text'];
                                		}
					} else {
                                                $db->query(sprintf('INSERT INTO model_rfid (rfid, model, text) VALUES (%s, "research", "Lorem ipsum")', secure($_GET['rfid']) )) or _error(SQL_ERROR_THROWEN);

						print "New RFID added";
					}
					exit;
					break;
		
				default:
	        	                return_json( array('error' => true, 'message' => "Bad Request, not valid model type") );
        	        	        break;
			}

			break;	
		default:
			return_json( array('error' => true, 'message' => "Bad Request, not valid get") );
			break;
	}

	// return & exit
	return_json($return);

} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>
