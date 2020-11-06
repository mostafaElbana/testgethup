<?php
    /**
    * 	This Class for update data in db 
    *	this class constructor recive the data which nust updated and the table name
    */
    class Update extends General
    {
        # define the class fields the tablename varible, data array and condition
        private $tablename;		
        private $data;
        private $condition;

        # This class constructor recive the tablename and data
        function __construct($data, $tablename, $condition)
        {							
          //  $this->data = $data;
        //    $this->tablename = $tablename;
        //    $this->condition = $condition;	
            $this->connectToDB();
        }

        # updateData methods which update the data in any table in connected db
        function updateData()
        {						
            # Update data in tablename in connected db 			
            $query = "UPDATE $this->tablename SET $this->data WHERE $this->condition";

            # if the update succeded will return true else will throw exception
            $sql = mysqli_query($this->cxn->con , $query);
            if (!$sql){
                throw new \Exception("Error : can not execute query");
            }else{
                return TRUE;    				
            }
        }
   function updatename($table,$nameset,$nameget){

# Update data in tablename in connected db          
            $query = "UPDATE $table SET `customer_name`= '$nameset' WHERE `customer_name`=\"$nameget\"";

            # if the update succeded will return true else will throw exception
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : can not execute query");
            }else{
                return TRUE;                    
            }

        }
    }