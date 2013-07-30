<?php

class DB {

    private static $dbs = array(
        'features' => array(
            'host' => '',
            'user' => '',
            'password' => '',
            'db' => ''
        ),
        'other' => array(
            'host' => '',
            'user' => '',
            'password' => '',
            'db' => ''
        )
    );

    public static function establish_database_connection($section='features'){
        $mysqli = new mysqli(DB::$dbs[$section]['host'], DB::$dbs[$section]['user'], DB::$dbs[$section]['password'], DB::$dbs[$section]['db']);
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            return FALSE;
        }
        return $mysqli;
    }
}

?>
