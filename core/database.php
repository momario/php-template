<?php
/**
 * 	//HOW TO USE:
 *  $test = database::get('TABLE_NAME');
 *  //FUNCTION WHERE DOES NOT WORK WITHOUT GET. GET SELECTS THE TABLE
 * 	$test2 = database::where('id',1); 
 * 	echo $test2->ROW_NAME;
 *  //WITH GET, ITERATE OVER ALL ROWS
 *  foreach($test as $row) {
 *      echo $row->VALUE;
 *  }
 */
class database {

    static $object;

    //CAST GLOBAL VARIABLE TO OBJECT
    function __construct() {
        database::$object = (object) database::$object;
    }//END

    public function connect() {
        $server = config::$database_server;
        $user = config::$database_user;
        $secret = config::$database_secret;
        $database = config::$database_database;
        $connect = mysqli_connect($server,$user,$secret,$database);
        return $connect;
    }//END

    //GET ALL TABLE ENTRIES, SET GLOBAL OBJECT, RETURN GLOBAL OBJECT
    public function get($table) {
        $array = array();
        $order = config::$database_order;
        $sql = "SELECT * FROM $table ORDER BY $order";
        $query = mysqli_query(database::connect(),$sql);
        while($row = mysqli_fetch_assoc($query)) {
            array_push($array,(object) $row);
        }
        database::$object = (object) $array; //CAST ARRAY TO OBJECT AND RETURN GLOBAL OBJECT
        return database::$object;
    }//END

    //RETURN MATCH AS GLOBAL OBJECT
    public function where($key,$value) {
        $return = false;
        foreach(database::$object as $row) {
            if($row->$key == $value) {
                $return = $row;
            }
        }
        return $return;
    }//END

}//END
?>