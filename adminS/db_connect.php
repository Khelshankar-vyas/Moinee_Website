<?php
 
/**
 * A class file to connect to database
 */
class DB_CONNECT {
 
    // constructor
    function __construct() {
        // connecting to database
        $this->connect();
    }
 
    // destructor
    function __destruct() {
        // closing db connection
        $this->close();
    }
 
    /**
     * Function to connect with database
     */
    function connect() {
        // import database connection variables
        require_once('db_config.php');
 
        // Connecting to mysql database
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());
 
        // Selecing database
        $db = mysqli_select_db($con,DB_DATABASE) or die(mysql_error()) or die(mysql_error());
		
		//for hindi data
		mysqli_set_charset($con,'utf8');
		
        // returing connection cursor
        return $con;
    }
 
    /**
     * Function to close db connection
     */
    function close() {
        // closing db connection
         // import database connection variables
         require_once('db_config.php');
 
         // Connecting to mysql database
         $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());
        mysqli_close($con);
    }
 
}
 
?>