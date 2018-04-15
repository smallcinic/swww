<?php
/**
 * admin
 * 
 * @package Sngine
 * @author Zamblek
 */

// set override_shutdown
$override_shutdown = true;

// fetch bootstrap
require('bootstrap.php');


// user access
user_access();

// check admin logged in
if(!$user->_is_admin) {
    _error(__('System Message'), __("You don't have the right permission to access this"));
}

try {

	// check view
	switch ($_GET['view']) {
		case '':
			// page header
			page_header(__("Admin Panel"));

			// update view
			$_GET['view'] = 'dashboard';

			// get insights
			/* total users */
			$get_users = $db->query("SELECT * FROM users") or _error(SQL_ERROR);
	    	$insights['users'] = $get_users->num_rows;
	    	/* males|females */
	    	$get_males = $db->query("SELECT * FROM users WHERE user_gender = 'male'");
		    $insights['users_males'] = $get_males->num_rows;
		    $get_females = $db->query("SELECT * FROM users WHERE user_gender = 'female'");
		    $insights['users_females'] = $get_females->num_rows;
		    $insights['users_males_percent'] = round(($insights['users_males']/$insights['users'])*100, 2);
		    $insights['users_females_percent'] = round(100 - $insights['users_males_percent']);
		    /* banned */
		    $get_banned = $db->query("SELECT * FROM users WHERE user_banned = '1'") or _error(SQL_ERROR);
	    	$insights['banned'] = $get_banned->num_rows;
		    /* not activated */
		    $get_not_activated = $db->query("SELECT * FROM users WHERE user_activated = '0'") or _error(SQL_ERROR);
	    	$insights['not_activated'] = $get_not_activated->num_rows;
	    	/* online */
		    $get_online = $db->query("SELECT * FROM users_online") or _error(SQL_ERROR);
	    	$insights['online'] = $get_online->num_rows;
	    	/* posts */
		    $get_posts = $db->query("SELECT * FROM posts") or _error(SQL_ERROR);
	    	$insights['posts'] = $get_posts->num_rows;
	    	/* comments */
		    $get_comments = $db->query("SELECT * FROM posts_comments") or _error(SQL_ERROR);
	    	$insights['comments'] = $get_comments->num_rows;
	    	/* pages */
		    $get_pages = $db->query("SELECT * FROM pages") or _error(SQL_ERROR);
	    	$insights['pages'] = $get_pages->num_rows;
	    	/* groups */
		    $get_groups = $db->query("SELECT * FROM groups") or _error(SQL_ERROR);
	    	$insights['groups'] = $get_groups->num_rows;
	    	/* events */
		    $get_events = $db->query("SELECT * FROM events") or _error(SQL_ERROR);
	    	$insights['events'] = $get_events->num_rows;
	    	/* messages */
		    $get_messages = $db->query("SELECT * FROM conversations_messages") or _error(SQL_ERROR);
	    	$insights['messages'] = $get_messages->num_rows;
	    	/* notifications */
		    $get_notifications = $db->query("SELECT * FROM notifications") or _error(SQL_ERROR);
	    	$insights['notifications'] = $get_notifications->num_rows;

	    	// get chart data
			for($i=1; $i <= 12; $i++) {
				/* get users */
				$get_monthly_users = $db->query("SELECT * FROM users WHERE YEAR(user_registered) = YEAR(CURRENT_DATE()) AND MONTH(user_registered) = $i");
				$chart['users'][$i] = $get_monthly_users->num_rows;
				/* get pages */
				$get_monthly_pages = $db->query("SELECT * FROM pages WHERE YEAR(page_date) = YEAR(CURRENT_DATE()) AND MONTH(page_date) = $i");
				$chart['pages'][$i] = $get_monthly_pages->num_rows;
				/* get groups */
				$get_monthly_groups = $db->query("SELECT * FROM groups WHERE YEAR(group_date) = YEAR(CURRENT_DATE()) AND MONTH(group_date) = $i");
				$chart['groups'][$i] = $get_monthly_groups->num_rows;
				/* get events */
				$get_monthly_events = $db->query("SELECT * FROM events WHERE YEAR(event_date) = YEAR(CURRENT_DATE()) AND MONTH(event_date) = $i");
				$chart['events'][$i] = $get_monthly_events->num_rows;
				/* get posts */
				$get_monthly_posts = $db->query("SELECT * FROM posts WHERE YEAR(time) = YEAR(CURRENT_DATE()) AND MONTH(time) = $i");
				$chart['posts'][$i] = $get_monthly_posts->num_rows;
			}

	    	// assign variables
			$smarty->assign('insights', $insights);
			$smarty->assign('chart', $chart);
			break;

		case 'settings':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("System Settings"));
					break;

				case 'posts':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Posts Settings"));
					break;

				case 'registration':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Registration Settings"));
					break;

				case 'emails':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Emails Settings"));
					break;

				case 'sms':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("SMS Settings"));
					break;

				case 'chat':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Chat Settings"));
					break;

				case 'uploads':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Uploads Settings"));

					// get PHP upload_max_filesize
					$max_upload_size = ini_get("upload_max_filesize");
					/* assign variables */
					$smarty->assign('max_upload_size', $max_upload_size);
					break;

				case 'security':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Security Settings"));
					break;

				case 'payments':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Payments Settings"));
					break;

				case 'limits':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Limits Settings"));
					break;

				case 'analytics':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Analytics Settings"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'themes':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Themes"));

					// get data
					$get_rows = $db->query("SELECT * FROM system_themes") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM system_themes WHERE theme_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Themes")." &rsaquo; ".$data['name']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Themes")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'design':
			// page header
			page_header(__("Admin")." &rsaquo; ".__("Design"));
			break;

		case 'languages':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Languages"));

					// get data
					$get_rows = $db->query("SELECT * FROM system_languages") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM system_languages WHERE language_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Languages")." &rsaquo; ".$data['title']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Languages")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'users':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Users"));
					
					// get data
					$get_rows = $db->query("SELECT * FROM users") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'admins':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Users")." &rsaquo; ".__("Admins"));
					
					// get data
					$get_rows = $db->query("SELECT * FROM users WHERE user_group = '1'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'moderators':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Users")." &rsaquo; ".__("Moderators"));
					
					// get data
					$get_rows = $db->query("SELECT * FROM users WHERE user_group = '2'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'online':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Users")." &rsaquo; ".__("Online"));
					
					// get data
					$get_rows = $db->query("SELECT users.* FROM users_online INNER JOIN users ON users_online.user_id = users.user_id") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'banned':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Users")." &rsaquo; ".__("Banned"));
					
					// get data
					$get_rows = $db->query("SELECT * FROM users WHERE user_banned = '1'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM users LEFT JOIN packages ON users.user_subscribed = '1' AND users.user_package = packages.package_id WHERE users.user_id = %s ", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					$data['user_picture'] = User::get_picture($data['user_picture'], $data['user_gender']);
					/* get user's friends */
					$data['friends'] = count($user->get_friends_ids($data['user_id']));
					$data['followings'] = count($user->get_followings_ids($data['user_id']));
					$data['followers'] = count($user->get_followers_ids($data['user_id']));
					/* parse birthdate */
					$data['user_birthdate_parsed'] = date_parse($data['user_birthdate']);
					/* get user sessions */
					$get_sessions = $db->query(sprintf("SELECT * FROM users_sessions WHERE user_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_sessions->num_rows > 0) {
			            while($session = $get_sessions->fetch_assoc()) {
			            	$data['sessions'][] = $session;
			            }
			        }
			        /* prepare packages */
			        if($system['packages_enabled']) {
						/* prepare user package */
						if($data['user_subscribed']) {
							switch ($data['period']) {
			                    case 'day':
			                        $duration = 86400;
			                        break;

			                    case 'week':
			                        $duration = 604800;
			                        break;

			                    case 'month':
			                        $duration = 2629743;
			                        break;

			                    case 'year':
			                        $duration = 31556926;
			                        break;
			                }
			                $data['subscription_end'] = strtotime($data['user_subscription_date']) + ($data['period_num'] * $duration);
			                $data['subscription_timeleft'] = ceil(($data['subscription_end'] - time()) / (60 * 60 * 24));
						}
						/* get packages */
						$packages = $user->get_packages();
						$smarty->assign('packages', $packages);
			        }
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Users")." &rsaquo; ".$data['user_firstname']." ".$data['user_lastname']);
					break;


                case 'add_user':
                    // page header
                    page_header(__("Admin")." &rsaquo; ".__("Users")." &rsaquo; ".__("Add New"));
                    break;

				default:
					_error(404);
					break;
			}
			break;

		case 'model':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Models"));

					// get data
					$get_rows = $db->query("SELECT * FROM model") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
						$rows[] = $row;
						}
					}

					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit_model':
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}

					// get data
					$get_data = $db->query(sprintf("SELECT * FROM model WHERE id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();

					// assign variables
					$smarty->assign('data', $data);

					// page header
					page_header(__("Admin")." &rsaquo; ".__("Models")." &rsaquo; ".$data['name']);
					break;

				case 'add_model':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Models")." &rsaquo; ".__("Add New"));
					break;
				
				case 'map':
					// page header
                                        page_header(__("Admin")." &rsaquo; ".__("Models")." &rsaquo; ".__("Map"));
					
					$get_rows = $db->query("SELECT model_map.id, model_map.user_id, model_map.model_id, users.user_name, model.name FROM model_map LEFT JOIN users ON users.user_id = model_map.user_id LEFT JOIN model ON model.id = model_map.model_id") or _error(SQL_ERROR);
                                        if($get_rows->num_rows > 0) {
                                                while($row = $get_rows->fetch_assoc()) {
                                                $rows[] = $row;
                                                }
                                        }

                                        // assign variables
                                        $smarty->assign('rows', $rows);
                                        break;

				case 'add_map':
                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Models")." &rsaquo; ".__("Map")." &rsaquo; ".__("Add New"));

					$get_rows_users = $db->query("SELECT user_id,user_name FROM users") or _error(SQL_ERROR);
					$get_rows_model = $db->query("SELECT id,name FROM model") or _error(SQL_ERROR);
					if($get_rows_users->num_rows > 0) {
                                                while($row_users = $get_rows_users->fetch_assoc()) {
                                                $rows_users[] = $row_users;
                                                }
                                        }
					
					if($get_rows_model->num_rows > 0) {
                                                while($row_model = $get_rows_model->fetch_assoc()) {
                                                $rows_model[] = $row_model;
                                                }
                                        }

					// assign variables
                    $smarty->assign('rows_users', $rows_users);
					$smarty->assign('rows_model', $rows_model);

					break;

				default:
					_error(404);
					break;
			}
			break;

		case 'rfid':
                        switch ($_GET['sub_view']) {
                                case '':
                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("rfid"));

                                        // get data
                                        $get_rows = $db->query("SELECT models_rfid.*, db_record.name AS name, db_record.text AS text, model.name AS model FROM models_rfid LEFT JOIN db_record ON models_rfid.record_id=db_record.id LEFT JOIN model ON models_rfid.model_id=model.id") or _error(SQL_ERROR);
                                        if($get_rows->num_rows > 0) {
                                                while($row = $get_rows->fetch_assoc()) {
                                                $rows[] = $row;
                                                }
                                        }

                                        // assign variables
                                        $smarty->assign('rows', $rows);
                                        break;
                                case 'edit_rfid':
                                        if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
                                                _error(404);
                                        }

                                        // get data
                                        $get_data = $db->query(sprintf("SELECT models_rfid.*, db_record.text AS text FROM models_rfid LEFT JOIN db_record ON models_rfid.record_id=db_record.id WHERE models_rfid.id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
                                        if($get_data->num_rows == 0) {
                                                _error(404);
                                        }
                                        $data = $get_data->fetch_assoc();

										$get_rows_record = $db->query(sprintf("SELECT * FROM db_record")) or _error(SQL_ERROR);
                                        if($get_rows_record->num_rows > 0) {
                                            while($row_record = $get_rows_record->fetch_assoc()) {
                                                $rows_record[] = $row_record;
                                            }
                                        }
										
										$get_rows_model = $db->query("SELECT * FROM model") or _error(SQL_ERROR);
                                        if($get_rows_model->num_rows > 0) {
                                            while($row_model = $get_rows_model->fetch_assoc()) {
                                                $rows_model[] = $row_model;
                                            }
                                        }

                                        // assign variables
                                        $smarty->assign('data', $data);
										$smarty->assign('rows_record', $rows_record);
										$smarty->assign('rows_model', $rows_model);

                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Models")." &rsaquo; ".__("Edit model rfid"));
                                        break;
                                default:
                                        _error(404);
                                        break;
			}
			break;

                case 'database':
                        // get content
                        switch ($_GET['sub_view']) {
                                case '':
                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Database")." &rsaquo; ".__("Networks"));

                                        // get data
                                        $get_rows = $db->query("SELECT db_net.id AS id, db_net.name AS name, users.user_name AS admin, db_net.available AS available, db_protect.name AS protect FROM db_net LEFT JOIN users ON db_net.admin_id=users.user_id LEFT JOIN db_protect ON db_net.protect_id=db_protect.id") or _error(SQL_ERROR);
                                        if($get_rows->num_rows > 0) {
                                                while($row = $get_rows->fetch_assoc()) {
                                                $rows[] = $row;
                                                }
                                        }

                                        // assign variables
                                        $smarty->assign('rows', $rows);
                                        break;

                                case 'edit_network':
                                        if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
                                                _error(404);
                                        }

                                        // get data
                                        $get_data = $db->query(sprintf("SELECT * FROM db_net WHERE id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
                                        if($get_data->num_rows == 0) {
                                                _error(404);
                                        }
                                        $data = $get_data->fetch_assoc();

										$get_rows_users = $db->query("SELECT user_id,user_name FROM users") or _error(SQL_ERROR);
                                        if($get_rows_users->num_rows > 0) {
                                            while($row_users = $get_rows_users->fetch_assoc()) {
                                                $rows_users[] = $row_users;
                                            }
                                        }
										
										$get_rows_protect = $db->query("SELECT id,name FROM db_protect") or _error(SQL_ERROR);
                                        if($get_rows_protect->num_rows > 0) {
                                            while($row_protect = $get_rows_protect->fetch_assoc()) {
                                                $rows_protect[] = $row_protect;
                                            }
                                        }
										
                                        // assign variables
                                        $smarty->assign('data', $data);
                                        $smarty->assign('rows_users', $rows_users);
                                        $smarty->assign('rows_protect', $rows_protect);

                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Database")." &rsaquo; ".__("Networks")." &rsaquo; ".$data['name']);
                                        break;

                                case 'add_network':
                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Database")." &rsaquo; ".__("Networks")." &rsaquo; ".__("Add Network"));

										$get_rows_users = $db->query("SELECT user_id,user_name FROM users") or _error(SQL_ERROR);
                                        if($get_rows_users->num_rows > 0) {
                                            while($row_users = $get_rows_users->fetch_assoc()) {
                                                $rows_users[] = $row_users;
                                            }
                                        }

										$get_rows_protect = $db->query("SELECT id,name FROM db_protect") or _error(SQL_ERROR);
                                        if($get_rows_protect->num_rows > 0) {
                                            while($row_protect = $get_rows_protect->fetch_assoc()) {
                                                $rows_protect[] = $row_protect;
                                            }
                                        }
										
										// assign variables
                                        $smarty->assign('rows_users', $rows_users);
										$smarty->assign('rows_protect', $rows_protect);
										
                                        break;

                                case 'server':
                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Database")." &rsaquo; ".__("Servers"));

                                        // get data
                                        $get_rows = $db->query("SELECT db_server.id AS id, db_server.name AS name, db_server.available AS available, db_net.name AS network, users.user_name AS admin, db_protect.name AS protect FROM db_server LEFT JOIN db_net ON db_server.net_id = db_net.id LEFT JOIN users ON db_server.admin_id = users.user_id LEFT JOIN db_protect ON db_server.protect_id=db_protect.id") or _error(SQL_ERROR);
                                        if($get_rows->num_rows > 0) {
                                                while($row = $get_rows->fetch_assoc()) {
                                                $rows[] = $row;
                                                }
                                        }

                                        // assign variables
                                        $smarty->assign('rows', $rows);
                                        break;

                                case 'edit_server':
                                        if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
                                                _error(404);
                                        }

                                        // get data
										$get_rows_users = $db->query("SELECT user_id,user_name FROM users") or _error(SQL_ERROR);
                                        if($get_rows_users->num_rows > 0) {
                                            while($row_users = $get_rows_users->fetch_assoc()) {
                                                $rows_users[] = $row_users;
                                            }
                                        }
					
					                    $get_rows_network = $db->query("SELECT id,name FROM db_net") or _error(SQL_ERROR);
					                    if($get_rows_network->num_rows > 0) {
                                            while($row_network = $get_rows_network->fetch_assoc()) {
                                                $rows_network[] = $row_network;
                                            }
                                        }

										$get_data = $db->query(sprintf("SELECT * FROM db_server WHERE id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
                                        if($get_data->num_rows == 0) {
                                                _error(404);
                                        }
										$data = $get_data->fetch_assoc();
										
										$get_rows_protect = $db->query("SELECT id,name FROM db_protect") or _error(SQL_ERROR);
                                        if($get_rows_protect->num_rows > 0) {
                                            while($row_protect = $get_rows_protect->fetch_assoc()) {
                                                $rows_protect[] = $row_protect;
                                            }
                                        }
										
					                    // assign variables
                                        $smarty->assign('rows_users', $rows_users);
					                    $smarty->assign('rows_network', $rows_network);
                                        $smarty->assign('data', $data);
										$smarty->assign('rows_protect', $rows_protect);
										
                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Database")." &rsaquo; ".__("Servers")." &rsaquo; ".$data['name']);
                                        break;

                                case 'add_server':
                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Database")." &rsaquo; ".__("Servers")." &rsaquo; ".__("Add Server"));
										
										$get_rows_users = $db->query("SELECT user_id,user_name FROM users") or _error(SQL_ERROR);
                                        if($get_rows_users->num_rows > 0) {
                                            while($row_users = $get_rows_users->fetch_assoc()) {
                                                $rows_users[] = $row_users;
                                            }
                                        }

                                        $get_rows_network = $db->query("SELECT id,name FROM db_net") or _error(SQL_ERROR);
					                    if($get_rows_network->num_rows > 0) {
                                            while($row_network = $get_rows_network->fetch_assoc()) {
                                                $rows_network[] = $row_network;
                                            }
                                        }

										$get_rows_protect = $db->query("SELECT id,name FROM db_protect") or _error(SQL_ERROR);
                                        if($get_rows_protect->num_rows > 0) {
                                            while($row_protect = $get_rows_protect->fetch_assoc()) {
                                                $rows_protect[] = $row_protect;
                                            }
                                        }
										
					                    // assign variables
                                        $smarty->assign('rows_users', $rows_users);
					                    $smarty->assign('rows_network', $rows_network);
										$smarty->assign('rows_protect', $rows_protect);
					
                                        break;

                                case 'record':
                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Database")." &rsaquo; ".__("Records"));

                                        // get data
                                        $get_rows = $db->query("SELECT db_record.*, db_server.name AS server FROM db_record LEFT JOIN db_server ON db_record.server_id=db_server.id") or _error(SQL_ERROR);
                                        if($get_rows->num_rows > 0) {
                                                while($row = $get_rows->fetch_assoc()) {
                                                $rows[] = $row;
                                                }
                                        }

                                        // assign variables
                                        $smarty->assign('rows', $rows);
                                        break;

                                case 'edit_record':
                                        if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
                                                _error(404);
                                        }

                                        // get data
					                    $get_rows_server = $db->query("SELECT id,name FROM db_server") or _error(SQL_ERROR);
					                    if($get_rows_server->num_rows > 0) {
                                            while($row_server = $get_rows_server->fetch_assoc()) {
                                                $rows_server[] = $row_server;
                                            }
                                        }

										$get_data = $db->query(sprintf("SELECT * FROM db_record WHERE id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
                                        if($get_data->num_rows == 0) {
                                                _error(404);
                                        }
										$data = $get_data->fetch_assoc();
																				
					                    // assign variables
					                    $smarty->assign('rows_server', $rows_server);
                                        $smarty->assign('data', $data);

                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Database")." &rsaquo; ".__("Records")." &rsaquo; ".$data['name']);
                                        break;

                                case 'add_record':
                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Database")." &rsaquo; ".__("Records")." &rsaquo; ".__("Add Record"));
										
										$get_rows_server = $db->query("SELECT id,name FROM db_server") or _error(SQL_ERROR);
                                        if($get_rows_server->num_rows > 0) {
                                            while($row_server = $get_rows_server->fetch_assoc()) {
                                                $rows_server[] = $row_server;
                                            }
                                        }
					
    				                    // assign variables
                                        $smarty->assign('rows_server', $rows_server);
										
                                        break;
										
                                default:
                                        _error(404);
                                        break;
                        }
                        break;

                case 'hacking':
                        // get content
                        switch ($_GET['sub_view']) {
                                case '':
                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Hacking")." &rsaquo; ".__("List of ices"));

                                        // get data
                                        $get_rows = $db->query(sprintf("SELECT hack_ice.*, users.user_name as user_name FROM hack_ice LEFT JOIN users ON hack_ice.user_id=users.user_id")) or _error(SQL_ERROR);
                                        if($get_rows->num_rows > 0) {
                                                while($row = $get_rows->fetch_assoc()) {
                                                $rows[] = $row;
                                                }
                                        }
										
                                        // assign variables
                                        $smarty->assign('rows', $rows);
                                        break;
										
								case 'edit_ice':
                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Hacking")." &rsaquo; ".__("List of icebreakers"));

                                        // get data
                                        $get_rows = $db->query(sprintf("SELECT hack_icebreaker.*, users.user_name FROM hack_icebreaker LEFT JOIN users ON hack_icebreaker.user_id=users.user_id")) or _error(SQL_ERROR);
                                        if($get_rows->num_rows > 0) {
                                                while($row = $get_rows->fetch_assoc()) {
                                                $rows[] = $row;
                                                }
                                        }
										
                                        // assign variables
                                        $smarty->assign('rows', $rows);
                                        break;
										
								case 'add_ice':
                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Hacking")." &rsaquo; ".__("List of icebreakers"));

                                        // get data
                                        $get_rows = $db->query(sprintf("SELECT hack_icebreaker.*, users.user_name FROM hack_icebreaker LEFT JOIN users ON hack_icebreaker.user_id=users.user_id")) or _error(SQL_ERROR);
                                        if($get_rows->num_rows > 0) {
                                                while($row = $get_rows->fetch_assoc()) {
                                                $rows[] = $row;
                                                }
                                        }
										
                                        // assign variables
                                        $smarty->assign('rows', $rows);
                                        break;
										
								case 'icebreaker':
                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Hacking")." &rsaquo; ".__("List of icebreakers"));

                                        // get data
                                        $get_rows = $db->query(sprintf("SELECT hack_icebreaker.*, users.user_name FROM hack_icebreaker LEFT JOIN users ON hack_icebreaker.user_id=users.user_id")) or _error(SQL_ERROR);
                                        if($get_rows->num_rows > 0) {
                                                while($row = $get_rows->fetch_assoc()) {
                                                $rows[] = $row;
                                                }
                                        }
										
                                        // assign variables
                                        $smarty->assign('rows', $data);
                                        break;

                                default:
                                        _error(404);
                                        break;
                        }
                        break;
		
		case 'pages':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pages"));
					
					// get data
					$get_rows = $db->query("SELECT pages.*, users.user_id, users.user_name, users.user_firstname, users.user_lastname, users.user_gender, users.user_picture FROM pages INNER JOIN users ON pages.page_admin = users.user_id") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['page_picture'] = User::get_picture($row['page_picture'], 'page');
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit_page':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT pages.*, users.user_id, users.user_name, users.user_firstname, users.user_lastname, users.user_gender, users.user_picture FROM pages INNER JOIN users ON pages.page_admin = users.user_id WHERE pages.page_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					$data['page_picture'] = User::get_picture($data['page_picture'], 'page');
					$data['user_picture'] = User::get_picture($data['user_picture'], $data['user_gender']);
					/* get categories */
					$data['categories'] = $user->get_pages_categories();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pages")." &rsaquo; ".$data['page_title']);
					break;

				case 'categories':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pages")." &rsaquo; ".__("Categories"));
					
					// get data
					$rows = $user->get_pages_categories();
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit_category':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM pages_categories WHERE category_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pages")." &rsaquo; ".__("Categories")." &rsaquo; ".$data['category_name']);
					break;

				case 'add_category':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pages")." &rsaquo; ".__("Categories")." &rsaquo; ".__("Add New Category"));
					break;

				default:
					_error(404);
					break;
			}
			break;

		case 'groups':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Groups"));
					
					// get data
					$get_rows = $db->query("SELECT groups.*, users.user_id, users.user_name, users.user_firstname, users.user_lastname, users.user_gender, users.user_picture FROM groups INNER JOIN users ON groups.group_admin = users.user_id") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['group_picture'] = User::get_picture($row['group_picture'], 'group');
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT groups.*, users.user_id, users.user_name, users.user_firstname, users.user_lastname, users.user_gender, users.user_picture FROM groups INNER JOIN users ON groups.group_admin = users.user_id WHERE groups.group_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					$data['group_picture'] = User::get_picture($data['group_picture'], 'group');
					$data['user_picture'] = User::get_picture($data['user_picture'], $data['user_gender']);
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Groups")." &rsaquo; ".$data['group_title']);
					break;

				default:
					_error(404);
					break;
			}
			break;

		case 'events':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Events"));
					
					// get data
					$get_rows = $db->query("SELECT events.*, users.user_id, users.user_name, users.user_firstname, users.user_lastname, users.user_gender, users.user_picture FROM events INNER JOIN users ON events.event_admin = users.user_id") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit_event':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT events.*, users.user_id, users.user_name, users.user_firstname, users.user_lastname, users.user_gender, users.user_picture FROM events INNER JOIN users ON events.event_admin = users.user_id WHERE events.event_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					$data['event_picture'] = User::get_picture($data['event_cover'], 'event');
					$data['user_picture'] = User::get_picture($data['user_picture'], $data['user_gender']);
					/* get categories */
					$data['categories'] = $user->get_events_categories();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Events")." &rsaquo; ".$data['event_title']);
					break;

				case 'categories':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Events")." &rsaquo; ".__("Categories"));
					
					// get data
					$rows = $user->get_events_categories();
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit_category':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM events_categories WHERE category_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Events")." &rsaquo; ".__("Categories")." &rsaquo; ".$data['category_name']);
					break;

				case 'add_category':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Events")." &rsaquo; ".__("Categories")." &rsaquo; ".__("Add New Category"));
					break;

				default:
					_error(404);
					break;
			}
			break;

		case 'games':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Games"));

					// get data
					$get_rows = $db->query("SELECT * FROM games") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['thumbnail'] = $user->get_picture($row['thumbnail'], 'game');
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM games WHERE game_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Games")." &rsaquo; ".$data['title']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Games")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'market':
			// get content
			switch ($_GET['sub_view']) {
				case 'categories':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Market")." &rsaquo; ".__("Categories"));
					
					// get data
					$rows = $user->get_market_categories();
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit_category':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM market_categories WHERE category_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Market")." &rsaquo; ".__("Categories")." &rsaquo; ".$data['category_name']);
					break;

				case 'add_category':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Market")." &rsaquo; ".__("Categories")." &rsaquo; ".__("Add New Category"));
					break;

				default:
					_error(404);
					break;
			}
			break;

		case 'packages':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pro Packages"));

					// get data
					$get_rows = $db->query("SELECT * FROM packages") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['icon'] = User::get_picture($row['icon'], 'package');
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM packages WHERE package_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pro Packages")." &rsaquo; ".$data['name']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pro Packages")." &rsaquo; ".__("Add New"));
					break;

				case 'subscribers':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pro Packages")." &rsaquo; ".__("Subscribers"));

					// get data
					$get_rows = $db->query("SELECT users.user_id, users.user_name, users.user_firstname, users.user_lastname, users.user_gender, users.user_picture, users.user_subscription_date, packages.* FROM users INNER JOIN packages ON users.user_package = packages.package_id WHERE users.user_subscribed = '1'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['icon'] = User::get_picture($row['icon'], 'package');
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}

					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'earnings':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Pro Packages")." &rsaquo; ".__("Earnings"));

					// get data
					$total_earnings = 0;
					$month_earnings = 0;
					$get_rows = $db->query("SELECT * FROM packages_payments") or _error(SQL_ERROR);
					$rows = array();
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row_month = date("n",strtotime($row['payment_date']));
							if($rows[$row['package_name']]) {
								$rows[$row['package_name']]['sales']++;
								if($rows[$row['package_name']]['months_sales'][$row_month]) {
									$rows[$row['package_name']]['months_sales'][$row_month]++;
								} else {
									$rows[$row['package_name']]['months_sales'][$row_month] = 1;
								}
								$rows[$row['package_name']]['earnings'] += $row['package_price'];
								/* add to month earnings */
								if($row_month == date('n')) {
									$month_earnings += $row['package_price'];
								}
								/* add to total earnings */
								$total_earnings += $row['package_price'];
							} else {
								$rows[$row['package_name']]['sales'] = 1;
								$rows[$row['package_name']]['months_sales'][$row_month] = 1;
								$rows[$row['package_name']]['earnings'] = $row['package_price'];
								/* add to month earnings */
								if($row_month == date('n')) {
									$month_earnings += $row['package_price'];
								}
								/* add to total earnings */
								$total_earnings += $row['package_price'];
							}
						}
					}
					/* prepare months sales */
					if($rows) {
						foreach ($rows as $key => $value) {
							for($i=1; $i <= 12; $i++) {
								if($rows[$key]['months_sales'][$i]) {
									continue;
								} else {
									$rows[$key]['months_sales'][$i] = 0;
								}
							}
						}
					}

					// assign variables
					$smarty->assign('total_earnings', $total_earnings);
					$smarty->assign('month_earnings', $month_earnings);
					$smarty->assign('rows', $rows);
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'affiliates':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Affiliates"));
					break;

				case 'payments':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Affiliates")." &rsaquo; ".__("Payment Requests"));

					// get data
					$get_rows = $db->query("SELECT affiliates_payments.*, users.user_id, users.user_name, users.user_firstname, users.user_lastname, users.user_gender, users.user_picture FROM affiliates_payments INNER JOIN users ON affiliates_payments.user_id = users.user_id WHERE affiliates_payments.status = '0'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				default:
					_error(404);
					break;
			}
			break;

		case 'reports':
			// page header
			page_header(__("Admin")." &rsaquo; ".__("Reports"));

			// get data
			$get_rows = $db->query("SELECT reports.*, users.user_name, users.user_firstname, users.user_lastname, users.user_picture, users.user_gender FROM reports INNER JOIN users ON reports.user_id = users.user_id") or _error(SQL_ERROR);
			if($get_rows->num_rows > 0) {
				while($row = $get_rows->fetch_assoc()) {
					$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
					/* get reported node */
					if($row['node_type'] == "user") {
						$get_node = $db->query(sprintf("SELECT user_name, user_firstname, user_lastname, user_gender, user_picture FROM users WHERE user_id = %s", secure($row['node_id'], 'int') )) or _error(SQL_ERROR);
						if($get_node->num_rows == 0) continue;
						$node = $get_node->fetch_assoc();
						$node['user_picture'] = User::get_picture($node['user_picture'], $node['user_gender']);
						$node['color'] = 'primary';

					} elseif ($row['node_type'] == 'page') {
						$get_node = $db->query(sprintf("SELECT page_name, page_title, page_picture FROM pages WHERE page_id = %s", secure($row['node_id'], 'int') )) or _error(SQL_ERROR);
						if($get_node->num_rows == 0) continue;
						$node = $get_node->fetch_assoc();
						$node['page_picture'] = User::get_picture($node['page_picture'], 'page');
						$node['color'] = 'info';

					} elseif ($row['node_type'] == 'group') {
						$get_node = $db->query(sprintf("SELECT group_name, group_title, group_picture FROM groups WHERE group_id = %s", secure($row['node_id'], 'int') )) or _error(SQL_ERROR);
						if($get_node->num_rows == 0) continue;
						$node = $get_node->fetch_assoc();
						$node['group_picture'] = User::get_picture($node['group_picture'], 'group');
						$node['color'] = 'warning';

					} elseif ($row['node_type'] == 'event') {
						$get_node = $db->query(sprintf("SELECT event_title, event_cover FROM events WHERE event_id = %s", secure($row['node_id'], 'int') )) or _error(SQL_ERROR);
						if($get_node->num_rows == 0) continue;
						$node = $get_node->fetch_assoc();
						$node['event_picture'] = User::get_picture($node['event_cover'], 'event');
						$node['color'] = 'success';

					} elseif ($row['node_type'] == 'comment') {
						$comment = $user->get_comment($row['node_id']);
						if(!$comment) continue;
						if($comment['node_type'] == "post") {
							$_handle = '/posts/';
							$_node_id = $comment['node_id'];
						} elseif ($comment['node_type'] == "photo") {
							$_handle = '/photos/';
							$_node_id = $comment['node_id'];
						} elseif($comment['node_type'] == "comment") {
							$_handle = ($comment['parent_comment']['node_type'] == "post")? '/posts/': '/photos/';
							$_node_id = $comment['parent_comment']['node_id'];
						}
						$row['url'] = $system['system_url'].$_handle.$_node_id.'?notify_id=comment_'.$row['node_id'];
						$node['color'] = 'default';

					} elseif ($row['node_type'] == 'post') {
						$node['color'] = 'danger';
					}
					$row['node'] = $node;
					$rows[] = $row;
				}
			}
			
			// assign variables
			$smarty->assign('rows', $rows);
			break;

		case 'banned_ips':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Banned IPs"));

					// get data
					$get_rows = $db->query("SELECT * FROM banned_ips") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Banned IPs")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'verification':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Verification")." &rsaquo; ".__("Requests"));
					
					// get data
					$get_rows = $db->query("SELECT verification_requests.*, users.user_name, users.user_firstname, users.user_lastname, users.user_gender, users.user_picture, pages.page_name, pages.page_title, pages.page_picture FROM verification_requests LEFT JOIN users ON verification_requests.node_type = 'user' AND verification_requests.node_id = users.user_id LEFT JOIN pages ON verification_requests.node_type = 'page' AND verification_requests.node_id = pages.page_id WHERE status = '0'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							/* get node */
							if($row['node_type'] == "user") {
								$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
								$row['color'] = 'primary';
							} elseif ($row['node_type'] == 'page') {
								$row['page_picture'] = User::get_picture($row['page_picture'], 'page');
								$row['color'] = 'info';
							}
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'users':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Verification")." &rsaquo; ".__("Verified Users"));

					// get data
					$get_rows = $db->query("SELECT * FROM users WHERE user_verified = '1'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['user_picture'] = User::get_picture($row['user_picture'], $row['user_gender']);
							$rows[] = $row;
						}
					}

					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'pages':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Verification")." &rsaquo; ".__("Verified Pages"));
					
					// get data
					$get_rows = $db->query("SELECT * FROM pages WHERE page_verified = '1'") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$row['page_picture'] = User::get_picture($row['page_picture'], 'page');
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;
				
				default:
					_error(404);
					break;
			}
			break;
		
		case 'custom_fields':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Custom Fields"));

					// get data
					$get_rows = $db->query("SELECT * FROM custom_fields") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM custom_fields WHERE field_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Custom Fields")." &rsaquo; ".$data['label']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Custom Fields")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'static':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Static Pages"));

					// get data
					$get_rows = $db->query("SELECT * FROM static_pages") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM static_pages WHERE page_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Static Pages")." &rsaquo; ".$data['page_title']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Static Pages")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'emojis':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Emojis"));
					
					// get data
					$rows = $user->get_emojis();
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM emojis WHERE emoji_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Emojis")." &rsaquo; ".__("Edit Emoji"));
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Emojis")." &rsaquo; ".__("Add New Emoji"));
					break;

				default:
					_error(404);
					break;
			}
			break;

		case 'stickers':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Stickers"));
					
					// get data
					$rows = $user->get_stickers();
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM stickers WHERE sticker_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Stickers")." &rsaquo; ".__("Edit Sticker"));
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Stickers")." &rsaquo; ".__("Add New Sticker"));
					break;

				default:
					_error(404);
					break;
			}
			break;

		case 'announcements':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Announcements"));

					// get data
					$get_rows = $db->query("SELECT * FROM announcements") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM announcements WHERE announcement_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Announcements")." &rsaquo; ".$data['name']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Announcements")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'newsletter':
			// page header
			page_header(__("Admin")." &rsaquo; ".__("Newsletter"));
			break;

		case 'ads':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Ads"));

					// get data
					$get_rows = $db->query("SELECT * FROM ads") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM ads WHERE ads_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Ads")." &rsaquo; ".$data['title']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Ads")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

		case 'widgets':
			// get content
			switch ($_GET['sub_view']) {
				case '':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Widgets"));

					// get data
					$get_rows = $db->query("SELECT * FROM widgets") or _error(SQL_ERROR);
					if($get_rows->num_rows > 0) {
						while($row = $get_rows->fetch_assoc()) {
							$rows[] = $row;
						}
					}
					
					// assign variables
					$smarty->assign('rows', $rows);
					break;

				case 'edit':
					// valid inputs
					if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
						_error(404);
					}
					
					// get data
					$get_data = $db->query(sprintf("SELECT * FROM widgets WHERE widget_id = %s", secure($_GET['id'], 'int') )) or _error(SQL_ERROR);
					if($get_data->num_rows == 0) {
						_error(404);
					}
					$data = $get_data->fetch_assoc();
					
					// assign variables
					$smarty->assign('data', $data);
					
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Widgets")." &rsaquo; ".$data['title']);
					break;

				case 'add':
					// page header
					page_header(__("Admin")." &rsaquo; ".__("Widgets")." &rsaquo; ".__("Add New"));
					break;
				
				default:
					_error(404);
					break;
			}
			break;

                case 'likes':
                        // get content
                        switch ($_GET['sub_view']) {
                                case '':
                                        // page header
                                        page_header(__("Admin")." &rsaquo; ".__("Likes"));

                                        // get data

					$get_data = $db->query("SELECT  pages.user_name, pages.user_firstname, pages.user_lastname, pages.pages_likes AS pages_likes, comments.comments_likes AS comments_likes,  posts.posts_likes AS posts_likes, photos.photos_likes AS photos_likes FROM (SELECT users.user_id AS user_id, users.user_name AS user_name, users.user_firstname AS user_firstname, users.user_lastname AS user_lastname, SUM(pages.page_likes) AS pages_likes FROM users LEFT JOIN pages ON pages.page_admin=users.user_id GROUP BY users.user_id) AS pages LEFT JOIN (SELECT user_id, SUM(likes) AS comments_likes FROM posts_comments GROUP BY posts_comments.user_id) AS comments ON pages.user_id=comments.user_id LEFT JOIN (SELECT user_id, SUM(posts.likes) AS posts_likes FROM posts GROUP BY posts.user_id) AS posts ON pages.user_id=posts.user_id LEFT JOIN (SELECT user_id, SUM(posts_photos.likes) AS photos_likes FROM posts LEFT JOIN posts_photos ON posts_photos.post_id=posts.post_id GROUP BY posts.user_id) AS photos ON pages.user_id=photos.user_id") or _error(SQL_ERROR);
                                        if($get_data->num_rows > 0) {
                                               while($row = $get_data->fetch_assoc()) {
                                                     $data[] = $row;
                                               }
                                        }

                                        // assign variables
                                        $smarty->assign('data', $data);
                                        break;

                                default:
                                        _error(404);
                                        break;
                        }
                        break;


		default:
			_error(404);
	}
	/* assign variables */
	$smarty->assign('view', $_GET['view']);
	$smarty->assign('sub_view', $_GET['sub_view']);

} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page footer
page_footer("admin");

?>
