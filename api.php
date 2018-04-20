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
				$new_id=0;
                $database_id=15;
                $research_id=16;
                $tech_id=17;
                $medic_id=19;
                $hacking_id=20;
                $self_id=21;
                $root_id=22;
    		switch ($_GET['query']) {
				case 'tech':

					break;

				case 'medic':

					break;

				case 'research':
				    //Ищем сервер для девайса
					$rows = $db->query(sprintf('SELECT * FROM models_device WHERE name = %1$s', secure($_GET['device']) )) or _error(SQL_ERROR_THROWEN);
                    if($rows->num_rows > 0) {
				        while($row = $rows->fetch_assoc()) {
					        $server_id=$row['server_id'];
						}
  				    } else {
					    // добавляем девайс с нулевым сервером
						$server_id=0;
					    $db->query(sprintf("INSERT IGNORE INTO models_device (name, server_id) VALUES (%s,%s)", secure($_GET['device']), secure($server_id) )) or _error(SQL_ERROR_THROWEN);
					}
                    //определяем действие
					if(!$_GET['rfid1']) {
						//добавляем новую запись
						$db->query(sprintf("INSERT INTO db_record (name, server_id, text, available) VALUES (%s,%s,'Оборудование протестировано успешно','1')", secure('Тест: '.$_GET['device']), secure($server_id) )) or _error(SQL_ERROR_THROWEN);
					} elseif (!$_GET['rfid2']) {
						//Находим данные рфидки для нужной модели
					    $rows = $db->query(sprintf('SELECT models_rfid.rfid, db_record.text AS text FROM models_rfid LEFT JOIN db_record ON models_rfid.record_id=db_record.id WHERE model_id = %1$s AND rfid = %2$s LIMIT 1', secure($research_id), secure($_GET['rfid1']) )) or _error(SQL_ERROR_THROWEN);
						if($rows->num_rows > 0) {
				            while($row = $rows->fetch_assoc()) {
					            $text=$row['text'];
							}
						} else {
							$text="Объект неизвестен!";
						}
						//Копируем данные
						$db->query(sprintf("INSERT INTO db_record (name, server_id, text, available) VALUES (%s,%s,%s,'1')", secure("Исследование завершено: ".$_GET['device']), secure($server_id), secure("Получена информация об бъекте: ".$text) )) or _error(SQL_ERROR_THROWEN);
					} elseif ($_GET['rfid2'] && $_GET['rfid1']) {
					   //Находим данные id записи рфидки1 для нужной модели
					   $rows = $db->query(sprintf('SELECT models_rfid.* FROM models_rfid WHERE model_id = %1$s AND rfid = %2$s LIMIT 1', secure($research_id), secure($_GET['rfid1']) )) or _error(SQL_ERROR_THROWEN);
						if($rows->num_rows > 0) {
				            while($row = $rows->fetch_assoc()) {
					            $id1=$row['record_id'];
								$rfid1=$row['id'];
							}
						} else {
							$text="Объект 1 неизвестен!";
							$db->query(sprintf("INSERT INTO db_record (name, server_id, text, available) VALUES (%s,%s,%s,'1')", secure("Синтез невозможен: ".$_GET['device']), secure($server_id), secure($text) )) or _error(SQL_ERROR_THROWEN);
                            break;
						}
					   //Находим данные id записи рфидки2 для нужной модели
					   $rows = $db->query(sprintf('SELECT models_rfid.* FROM models_rfid WHERE model_id = %1$s AND rfid = %2$s LIMIT 1', secure($research_id), secure($_GET['rfid2']) )) or _error(SQL_ERROR_THROWEN);
						if($rows->num_rows > 0) {
				            while($row = $rows->fetch_assoc()) {
					            $id2=$row['record_id'];
								$rfid2=$row['id'];
							}
						} else {
							$text=$text."Объект 2 неизвестен!";
							$db->query(sprintf("INSERT INTO db_record (name, server_id, text, available) VALUES (%s,%s,%s,'1')", secure("Синтез невозможен: ".$_GET['device']), secure($server_id), secure($text) )) or _error(SQL_ERROR_THROWEN);
                            break;
						}
						//Находим правило синтеза
						$rows = $db->query(sprintf('SELECT * FROM `models_research` WHERE rec1=%1$s AND rec2=%2$s LIMIT 1', secure($id1), secure($id2) )) or _error(SQL_ERROR_THROWEN);
						if($rows->num_rows > 0) {
				            while($row = $rows->fetch_assoc()) {
					            $id3=$row['rec3'];
							}
							$db->query(sprintf("UPDATE models_rfid SET record_id = %s WHERE id = %s", secure($id3), secure($rfid1), secure($_GET['id'], 'int'))) or _error(SQL_ERROR_THROWEN);
							$db->query(sprintf("UPDATE models_rfid SET record_id = 0 WHERE id = %s", secure($rfid2), secure($_GET['id'], 'int'))) or _error(SQL_ERROR_THROWEN);
							$rows = $db->query(sprintf('SELECT models_rfid.rfid, db_record.text AS text FROM models_rfid LEFT JOIN db_record ON models_rfid.record_id=db_record.id WHERE model_id = %1$s AND rfid = %2$s LIMIT 1', secure($research_id), secure($_GET['rfid1']) )) or _error(SQL_ERROR_THROWEN);
						        if($rows->num_rows > 0) {
				                    while($row = $rows->fetch_assoc()) {
					                    $text=$row['text'];
							        }
								}
							$db->query(sprintf("INSERT INTO db_record (name, server_id, text, available) VALUES (%s,%s,%s,'1')", secure("Синтез завершён: ".$_GET['device']), secure($server_id), secure($text) )) or _error(SQL_ERROR_THROWEN);
						} else {
							$text="Нельзя сотворить здесь!";
							$db->query(sprintf("INSERT INTO db_record (name, server_id, text, available) VALUES (%s,%s,%s,'1')", secure("Синтез невозможен: ".$_GET['device']), secure($server_id), secure($text) )) or _error(SQL_ERROR_THROWEN);
						}
					}
				    
				break;

				case 'lock':
                    //Проверка существования рфидок - для добавления новых
					$check_rfid = $db->query(sprintf('SELECT * FROM models_rfid WHERE rfid = %1$s', secure($_GET['rfid']) )) or _error(SQL_ERROR_THROWEN);
                    if($get_research->num_rows = 0) {
                        $db->query(sprintf('INSERT INTO models_rfid (rfid, model_id, record_id) VALUES (%s, 0, 0)', secure($_GET['rfid']) )) or _error(SQL_ERROR_THROWEN);
                        print "New RFID added";
                    }
				
					break;

				case 'self':

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
