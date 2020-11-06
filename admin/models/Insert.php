<?php

    /**dd
    * 	This Class for Insert data in db 
    *	this class constructor recive the data which nedded to insert and the table name
    */
    class Insert extends General
    {
        # define the class fields the tablename varible and data array
        private $data;
        private $tablename;

        # This class constructor recive the tablename and data
        function __construct($data,$tablename) 
        {
            # Check the data must be array
            if (is_array($data)) 
            {
                # assign this constructor params to the class fields
                $this->data = $data;
                $this->tablename = $tablename;
            }else{
                throw new \Exception("Error : data must be an array ");
            }
            # Call connection function in General file
            $this->connectToDB();
        }

        # addData methods which insert the data in any table in connected db
        function addData()
        {			
            # Loop on this class data which sent from controller and fetch it in two arrays 
            # one for the db keys and second for db keys values
            foreach ($this->data as $key => $value) {
                $keys[] = $key;
                $values[] = $value; 
            }
            # Form the db keys and keys values in some form which the query can read them
            $tblKeys = implode($keys, ",");
            $dataValues = '"'. implode($values, '","') .'"';			
            # Insert in tablename which belongs to connected db
            $query = "INSERT INTO $this->tablename ($tblKeys) VALUES ($dataValues) ";
            
            # if the insert succeded will return true else will throw exception
            $sql = mysqli_query($this->cxn->handle , $query);
            if (!$sql){
                /*print_r($this->data);
                die();*/
                throw new \Exception("Error : can not execute query");
            }else{
                return TRUE;
            }
        }
         public function addDataAndGetLast()
         {
             # Loop on this class data which sent from controller and fetch it in two arrays 
            # one for the db keys and second for db keys values
            foreach ($this->data as $key => $value) {
                $keys[] = $key;
                $values[] = $value; 
            }
            # Form the db keys and keys values in some form which the query can read them
            $tblKeys = implode($keys, ",");
            $dataValues = '"'. implode($values, '","') .'"';			
            # Insert in tablename which belongs to connected db
            $query = "INSERT INTO $this->tablename ($tblKeys) VALUES ($dataValues) ";
            
            # if the insert succeded will return true else will throw exception
            $sql = mysqli_query($this->cxn->handle , $query);
            if (!$sql){
                /*print_r($this->data);
                die();*/
                throw new \Exception("Error : can not execute query");
            }else{
                return $last_id = mysqli_insert_id($this->cxn->handle);
            }
         }
    }