<?php

    class Delete extends General
    {
        # define the class fields the tablename varible and condition
        private $tablename;			
        private $condition;

        # This class constructor recive the tablename and data
        function __construct($tablename,$condition)
        {										
            # assign this constructor params to the class fields
            $this->tablename = $tablename;
            $this->condition = $condition;
            # Call connection function in General file
            $this->connectToDB();
        }

        # deleteData methods which deleted the data in any table in connected db
        function deleteData()
        {			
            # delete data in tablename in connected db 
            $query = "DELETE FROM $this->tablename $this->condition";
            
            # if the delete succeded will return true else will throw exception
            $sql = mysqli_query($this->cxn->handle , $query);
            if (!$sql) {
                throw new \Exception("Error : can not execute query");
            }else{
                return TRUE;  				
            }
        }
    }