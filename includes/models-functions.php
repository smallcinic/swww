<?php
/**
 * models-functions
 *
 * @package Sngine
 * @author cinic
 */
 
 /**
* this function log get and post messages from this script to file /home/admin/web/sngine.hplus.su/logs/getpost.txt
*/
function loggetpost() {
  $file = "/home/admin/web/sngine.hplus.su/logs/getpost.txt";
  $current = file_get_contents($file);
  $current .= "GET\n";
  foreach($_GET as $key => $value)
  {
     $current .= "\$_GET[".$key."] = ".$value."\n";
  }
  $current .= "\nPOST\n";
  foreach($_POST as $key => $value)
  {
     $current .= "\$_POST[".$key."] = ".$value."\n";
  }
  file_put_contents($file, $current);
}


    /* ------------------------------- */
    /* Models */
    /* ------------------------------- */

    /**
     * get_models
     *
     * @param integer $offset
     * @return array
     */
    function get_models($offset = 0) {
        global $db, $system, $user;
        $models = array();
        $offset *= $system['max_results_even'];
        $get_models = $db->query(sprintf('SELECT model.* FROM model INNER JOIN model_map ON model.id=model_map.model_id WHERE model_map.user_id = %s LIMIT %s, %s', secure($user->_data['user_id'], 'int'), secure($offset, 'int', false), secure($system['max_results_even'], 'int', false) )) or _error(SQL_ERROR_THROWEN);
        if($get_models->num_rows > 0) {
            while($model = $get_models->fetch_assoc()) {
                $models[] = $model;
            }
        }
        return $models;
    }

    /**
     * get_user_net
	 * return list of networks where user have servers (as admin or any access type)
     *
     * @param integer $offset
     * @return array
     */
    function get_user_net($offset = 0) {
        global $db, $system, $user;
        $user_net = array();
        $offset *= $system['max_results_even'];
        $get_user_net = $db->query(sprintf('SELECT DISTINCT db_net.id AS id, db_net.name AS name FROM db_server INNER JOIN db_net ON db_net.id = db_server.net_id LEFT JOIN db_permission ON db_permission.server_id = db_server.id WHERE db_server.available=1 AND (db_permission.user_id =%s OR db_server.admin_id =%s) LIMIT %s, %s', secure($user->_data['user_id'], 'int'), secure($user->_data['user_id'], 'int'), secure($offset, 'int', false), secure($system['max_results_even'], 'int', false) )) or _error(SQL_ERROR_THROWEN);
        if($get_user_net->num_rows > 0) {
            while($user_network = $get_user_net->fetch_assoc()) {
                $user_net[] = $user_network;
            }
        }
        return $user_net;
    }

    /**
     * get_user_servers
	 * return list of servers where user have any permissions (or is admin)
     *
	 * @param integer $net_id
     * @param integer $offset
     * @return array
     */
    function get_user_servers($net_id, $offset = 0) {
        global $db, $system, $user;
        $user_servers = array();
        $offset *= $system['max_results_even'];
        $get_user_servers = $db->query(sprintf('SELECT DISTINCT db_server.* FROM db_server LEFT JOIN db_permission ON db_permission.server_id=db_server.id WHERE db_server.available=1 AND db_server.net_id=%s AND (db_permission.user_id=%s OR db_server.admin_id=%s) LIMIT %s, %s', secure($net_id, 'int'), secure($user->_data['user_id'], 'int'), secure($user->_data['user_id'], 'int'), secure($offset, 'int', false), secure($system['max_results_even'], 'int', false) )) or _error(SQL_ERROR_THROWEN);
        if($get_user_servers->num_rows > 0) {
            while($user_server = $get_user_servers->fetch_assoc()) {
                $user_servers[] = $user_server;
            }
        }
        return $user_servers;
    }

    /**
     * get_user_recorde
	 * return list of record from users servers
     *
	 * @param integer $server_id
     * @param integer $offset
     * @return array
     */
    function get_user_records($server_id, $offset = 0) {
        global $db, $system, $user;
        $user_records = array();
        $offset *= $system['max_results_even'];
        if($server_id == 0){
            $get_user_records = $db->query(sprintf('SELECT DISTINCT db_record.*, db_permission.access AS access, db_server.admin_id AS admin FROM db_record INNER JOIN db_server ON db_record.server_id=db_server.id LEFT JOIN db_permission ON db_permission.server_id=db_server.id WHERE db_record.available=1 AND (db_server.admin_id=%s OR db_permission.user_id=%s) LIMIT %s, %s', secure($user->_data['user_id'], 'int'), secure($user->_data['user_id'], 'int'), secure($offset, 'int', false), secure($system['max_results_even'], 'int', false) )) or _error(SQL_ERROR_THROWEN);
		} else {
		    $get_user_records = $db->query(sprintf('SELECT DISTINCT db_record.*, db_permission.access AS access, db_server.admin_id AS admin FROM db_record INNER JOIN db_server ON db_record.server_id=db_server.id LEFT JOIN db_permission ON db_permission.server_id=db_server.id WHERE db_record.available=1 AND db_server.id=%s AND(db_server.admin_id=%s OR db_permission.user_id=%s) LIMIT %s, %s', secure($server_id, 'int'), secure($user->_data['user_id'], 'int'), secure($user->_data['user_id'], 'int'), secure($offset, 'int', false), secure($system['max_results_even'], 'int', false) )) or _error(SQL_ERROR_THROWEN);
		}
        if($get_user_records->num_rows > 0) {
            while($user_record = $get_user_records->fetch_assoc()) {
                $user_records[] = $user_record;
            }
        }
        return $user_records;
    }
	
	 /**
     * remove_record
	 * make record inavailable. Not really remove it!
	 *
	 * @param integer $server_id
     * @param integer $offset
     * @return array
     */
    function remove_record($record_id, $offset = 0) {
        global $db, $system, $user;
        $user_records = array();
        $offset *= $system['max_results_even'];
        if($server_id == 0){
            $get_user_records = $db->query(sprintf('SELECT DISTINCT db_record.*, db_permission.access AS access, db_server.admin_id AS admin FROM db_record INNER JOIN db_server ON db_record.server_id=db_server.id LEFT JOIN db_permission ON db_permission.server_id=db_server.id WHERE db_record.available=1 AND (db_server.admin_id=%s OR db_permission.user_id=%s) LIMIT %s, %s', secure($user->_data['user_id'], 'int'), secure($user->_data['user_id'], 'int'), secure($offset, 'int', false), secure($system['max_results_even'], 'int', false) )) or _error(SQL_ERROR_THROWEN);
		} else {
		    $get_user_records = $db->query(sprintf('SELECT DISTINCT db_record.*, db_permission.access AS access, db_server.admin_id AS admin FROM db_record INNER JOIN db_server ON db_record.server_id=db_server.id LEFT JOIN db_permission ON db_permission.server_id=db_server.id WHERE db_record.available=1 AND db_server.id=%s AND(db_server.admin_id=%s OR db_permission.user_id=%s) LIMIT %s, %s', secure($server_id, 'int'), secure($user->_data['user_id'], 'int'), secure($user->_data['user_id'], 'int'), secure($offset, 'int', false), secure($system['max_results_even'], 'int', false) )) or _error(SQL_ERROR_THROWEN);
		}
        if($get_user_records->num_rows > 0) {
            while($user_record = $get_user_records->fetch_assoc()) {
                $user_records[] = $user_record;
            }
        }
        return $user_records;
    }

?>
