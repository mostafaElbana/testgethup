<?php

    class Select extends General
    {

        public $tablename;

        function __construct($tablename)
        {

            $this->tablename = $tablename;
            $this->connectToDB();
        }

        function getDataWhere($username , $password)
        {
            $query = "SELECT * FROM $this->tablename WHERE username = \"$username\" AND password = \"$password\"";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }

        function getAllData()
        {
            # select data in tablename in connected db
            $query = "SELECT * FROM $this->tablename ORDER BY id DESC";

            # if the select query succeded will return selected data else will throw exception
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }else{
                return $sql;
            }
        }

        function getAllDataOffcet($start)
        {
            # select data in tablename in connected db
            $query = "SELECT * FROM $this->tablename ORDER BY id DESC LIMIT $start, 4";

            # if the select query succeded will return selected data else will throw exception
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }else{
                return $sql;
            }
        }

        function getDataById($id)
        {
            $query = "SELECT * FROM $this->tablename WHERE id = $id ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                die($query);
               # throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }

        function getDataByIdactivity($doc_id)
        {
            $query = "SELECT * FROM $this->tablename WHERE product_id = $doc_id ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                die($query);
                ##throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }
        #get doctor by name session....
         function getShopDataByname($doc_name)
        {
            $query = "SELECT * FROM $this->tablename WHERE customer_name = \"$doc_name\" ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                die($query);
                ##throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }

        function getPharmaDataById($pharma_id)
        {
            $query = "SELECT * FROM $this->tablename WHERE pharma_id = $pharma_id ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }
         function getPharmaDataByname($pharma_name)
        {
            $query = "SELECT * FROM $this->tablename WHERE pharma_name = \"$pharma_name\" ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }

        function getIncubDataById($incub_id)
        {
            $query = "SELECT * FROM $this->tablename WHERE incub_id = $incub_id ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }
         function getIncubDataByname($incub_name)
        {
            $query = "SELECT * FROM $this->tablename WHERE incub_name = \"$incub_name\" ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }

        function getBloodDataById($blood_id)
        {
            $query = "SELECT * FROM $this->tablename WHERE blood_id = $blood_id ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }

         function getBloodDataByname($blood_name)
        {
            $query = "SELECT * FROM $this->tablename WHERE blood_name = \"$blood_name\" ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }
        function getNewsDataById($care_id)
        {
            $query = "SELECT * FROM $this->tablename WHERE id = $care_id ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }
        function getCareDataByname($care_name)
        {
            $query = "SELECT * FROM $this->tablename WHERE customer_name = \"$care_name\"  ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }
        function getLabsDataById($labs_id)
        {
            $query = "SELECT * FROM $this->tablename WHERE lab_id = $labs_id ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }
         function getLabsDataByname($labs_name)
        {
            $query = "SELECT * FROM $this->tablename WHERE lab_name = \"$labs_name\"  ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }

        function getCenterDataById($center_id)
        {
            $query = "SELECT * FROM $this->tablename WHERE center_id = $center_id ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }
         function getCenterDataByname($center_name)
        {
            $query = "SELECT * FROM $this->tablename WHERE center_name = \"$center_name\" ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }

        function getHosDataById($hos_id)
        {
            $query = "SELECT * FROM $this->tablename WHERE hos_id = $hos_id ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }
        function getHosDataByname($hos_name)
        {
            $query = "SELECT * FROM $this->tablename WHERE hos_name = \"$hos_name\" ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }

        function getHosDocsDataById($doctor_id)
        {
            $query = "SELECT * FROM $this->tablename WHERE doctor_id = $doctor_id ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }
 function getAllDataOrder()
        {
            # select data in tablename in connected db
            # $query = 'SELECT * FROM movies ORDER BY title DESC';
            $query = "SELECT * FROM $this->tablename ORDER BY customer_name DESC";

            # if the select query succeded will return selected data else will throw exception
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }else{
                return $sql;
            }
        }
        function getHosDocsDataByname($doctor_name)
        {
            $query = "SELECT * FROM $this->tablename WHERE doctor_name = \"$doctor_name\" ";
            # if the select query succeded will return selected data else will throw exception7
            $sql = mysqli_query($this->cxn->handle, $query);
            if (!$sql){
                throw new \Exception("Error : Can not display data ");
            }
            else{
                return $sql;
            }
        }
    }
