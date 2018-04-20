<?php
/**
 * ajax -> admin -> delete
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


// valid inputs
if(!isset($_POST['id']) || !is_numeric($_POST['id'])) {
	_error(400);
}

// delete
try {

	switch ($_POST['handle']) {

		case 'theme':
			$db->query(sprintf("DELETE FROM system_themes WHERE theme_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'language':
			$db->query(sprintf("DELETE FROM system_languages WHERE language_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'user':
			$user->delete_user($_POST['id']);
			if(isset($_POST['node']) && is_numeric($_POST['node'])) {
				/* delete report */
				$db->query(sprintf("DELETE FROM reports WHERE report_id = %s", secure($_POST['node'], 'int') )) or _error(SQL_ERROR_THROWEN);
			}
			break;

		case 'session':
			$db->query(sprintf("DELETE FROM users_sessions WHERE session_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'user_package':
			$db->query(sprintf("UPDATE users SET user_subscribed = '0', user_package = null, user_subscription_date = null, user_boosted_posts = '0', user_boosted_pages = '0' WHERE user_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'model':
			 $db->query(sprintf("DELETE FROM model WHERE id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			 break;
			 
	    case 'device':
			 $db->query(sprintf("DELETE FROM models_device WHERE id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			 break;
                case 'device':
                         $db->query(sprintf("DELETE FROM models_rfid WHERE id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                         break;

		case 'model_map':
                         $db->query(sprintf("DELETE FROM model_map WHERE id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                         break;

                 case 'rfid':
                         $db->query(sprintf("DELETE FROM models_rfid WHERE id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                         break;

                 case 'network':
                         $db->query(sprintf("DELETE FROM db_net WHERE id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                         break;

                 case 'server':
                         $db->query(sprintf("DELETE FROM db_server WHERE id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                         break;

                 case 'record':
                         $db->query(sprintf("DELETE FROM db_record WHERE id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                         break;

		case 'page':
			$user->delete_page($_POST['id']);
			if(isset($_POST['node']) && is_numeric($_POST['node'])) {
				/* delete report */
				$db->query(sprintf("DELETE FROM reports WHERE report_id = %s", secure($_POST['node'], 'int') )) or _error(SQL_ERROR_THROWEN);
			}
			break;

		case 'page_category':
			$db->query(sprintf("DELETE FROM pages_categories WHERE category_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'group':
			$user->delete_group($_POST['id']);
			if(isset($_POST['node']) && is_numeric($_POST['node'])) {
				/* delete report */
				$db->query(sprintf("DELETE FROM reports WHERE report_id = %s", secure($_POST['node'], 'int') )) or _error(SQL_ERROR_THROWEN);
			}
			break;

		case 'event':
			$user->delete_event($_POST['id']);
			if(isset($_POST['node']) && is_numeric($_POST['node'])) {
				/* delete report */
				$db->query(sprintf("DELETE FROM reports WHERE report_id = %s", secure($_POST['node'], 'int') )) or _error(SQL_ERROR_THROWEN);
			}
			break;

		case 'event_category':
			$db->query(sprintf("DELETE FROM events_categories WHERE category_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'game':
			$db->query(sprintf("DELETE FROM games WHERE game_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'market_category':
			$db->query(sprintf("DELETE FROM market_categories WHERE category_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'package':
			$db->query(sprintf("DELETE FROM packages WHERE package_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'report':
			$db->query(sprintf("DELETE FROM reports WHERE report_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'post':
			/* delete post */
			$user->delete_post($_POST['id']);
			if(isset($_POST['node']) && is_numeric($_POST['node'])) {
				/* delete report */
				$db->query(sprintf("DELETE FROM reports WHERE report_id = %s", secure($_POST['node'], 'int') )) or _error(SQL_ERROR_THROWEN);
			}	
			break;

		case 'comment':
			/* delete comment */
			$user->delete_comment($_POST['id']);
			if(isset($_POST['node']) && is_numeric($_POST['node'])) {
				/* delete report */
				$db->query(sprintf("DELETE FROM reports WHERE report_id = %s", secure($_POST['node'], 'int') )) or _error(SQL_ERROR_THROWEN);
			}
			break;

		case 'ip':
			$db->query(sprintf("DELETE FROM banned_ips WHERE ip_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'custom_field':
			$db->query(sprintf("DELETE FROM custom_fields WHERE field_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			$db->query(sprintf("DELETE FROM users_custom_fields WHERE field_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'static_page':
			$db->query(sprintf("DELETE FROM static_pages WHERE page_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'emoji':
			$db->query(sprintf("DELETE FROM emojis WHERE emoji_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'sticker':
			$db->query(sprintf("DELETE FROM stickers WHERE sticker_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'announcement':
			$db->query(sprintf("DELETE FROM announcements WHERE announcement_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'ads':
			$db->query(sprintf("DELETE FROM ads WHERE ads_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		case 'widget':
			$db->query(sprintf("DELETE FROM widgets WHERE widget_id = %s", secure($_POST['id'], 'int') )) or _error(SQL_ERROR_THROWEN);
			break;

		default:
			_error(400);
			break;
	}

	// return
	return_json();

} catch (Exception $e) {
	modal(ERROR, __("Error"), $e->getMessage());
}

?>
