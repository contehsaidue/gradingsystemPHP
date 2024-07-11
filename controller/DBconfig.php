<?php


// Database connection parameters

class DBConfig {

    public $conn; // declare connection variable globally
    
    public function __construct (){ // this method gets called automatically

        $this->db_connect ();
    }
    
    public function db_connect (){
       
        define('Dbhostname','localhost');
        define('Dbusername', 'root');
        define('Dbhostpass', '');
        define('Dbname' , 'dbnugs');
        
        // connection variable
        $this->conn = mysqli_connect (Dbhostname , Dbusername , Dbhostpass, Dbname);
        
        if (!$this->conn){
        echo 'Failed to connect to System Database!';
    }

}


}


?>