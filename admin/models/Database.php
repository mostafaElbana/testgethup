<?php

class Database {
    private $hostname;
    private $user;
    private $password;
    private $dbname;
    public $handle;
    
    public function __construct($filename) {
        if (is_file($filename)) {
            require "$filename";
        }
        else{
            throw new Exception("The File Dosen't exists !");
        }
        
        $this->hostname = $hostname;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname ;
        
        #Call connection function ..
        $this->connect();
    }
    
    private function connect(){
        #mysqli connection ..
        $this->handle = mysqli_connect($this->hostname, $this->user, $this->password, $this->dbname);
        if (!$this->handle) {
            throw new Exception("Error in connection to database !!");
        }
        mysqli_set_charset($this->handle,'utf8');
    }
    
    function closeDB(){
        mysqli_close($this->handle);
    }
}
