<?php

   /* session_save_path("/home/users/web/b2830/ipg.rehltycom/cgi-bin/tmp");
    session_start();

    if( !isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] != 1 )
    {
        die("<meta http-equiv='refresh' content='0; url=index.php'> ");
    }
    */
    if (isset($_POST['submitUser'])) {
        $data['id'] = "";
        $data['email'] = rtrim(ltrim(htmlentities($_POST['email'])));
        $data['username'] = rtrim(ltrim(htmlentities($_POST['username'])));


        $data['password'] = rtrim(ltrim(htmlentities($_POST['password'])));

        $addedUser = insertIntoUsers($data);
        if ($addedUser == 1) {
            die("<meta http-equiv='refresh' content='0; url=../home.php'> ");
        } else {
            $_SESSION['ManagerAddError'] = "Add error";
            die("<meta http-equiv='refresh' content='0; url=../home.php'> ");
        }
    }
    function insertIntoUsers($data){
        $dir =  dirname(dirname(__FILE__));
        $fullGeneralPath = $dir."/models/General.php";
        $fullSelectPath = $dir."/models/Insert.php";
        
        require_once $fullGeneralPath;		
        require_once $fullSelectPath;
        
        $insertUser = new Insert($data , "user");
        $insertedUser = $insertUser->addData();
        return $insertedUser;
    }
  