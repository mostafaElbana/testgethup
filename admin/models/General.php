<?php

    class General 
    {
        public $cxn;
        
        function connectToDB(){
            
            $dir =  dirname(dirname(__FILE__));
            $fullDBPath = $dir."/models/Database.php";
            require_once $fullDBPath;

            $var = 'includes/Vars.php';
            $dir =  dirname(dirname(__FILE__));
            $fullVarsPath = $dir."/".$var;

            # create object from database to connect to db
            $this->cxn = new Database($fullVarsPath);							
        }
        
        function close(){
            
            $this->cxn->closeDB();
        }
    }