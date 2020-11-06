<?php

  /*  session_save_path("/home/users/web/b2830/ipg.rehltycom/cgi-bin/tmp");
   session_start();

    if( !isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] != 1 )
    {
        die("<meta http-equiv='refresh' content='0; url=index.php'> ");
    }
*/
    if(isset($_POST['submitUserEdit'])){
        $deletedUserId = $_POST['id'];
        echo  $deletedUserId;
        $deletedUser = deleteDataOfOneUser($deletedUserId);
        if ($deletedUser == 1) {
            $data['id'] = $deletedUserId;
            $data['email'] = rtrim(ltrim(htmlentities($_POST['email'])));
            $data['username'] = rtrim(ltrim(htmlentities($_POST['username'])));


            $data['password'] = rtrim(ltrim(htmlentities($_POST['password'])));
            $addedUser = insertIntoUsers($data);
            if ($addedUser == 1) {
                die("<meta http-equiv='refresh' content='0; url=../home.php?page=manager-control'> ");
            }else{
                $_SESSION['ManagerAddError'] = "Add error";
                die("<meta http-equiv='refresh' content='0; url=../home.php?page=manager-control'> ");
            }
        }
    }
    
    
    function deleteDataOfOneUser($deletedUserId){
        $dir =  dirname(dirname(__FILE__));
        $fullGeneralPath = $dir."/models/General.php";
        $fullSelectPath = $dir."/models/Delete.php";
        
        require_once $fullGeneralPath;		
        require_once $fullSelectPath;
        
        $deleteUser = new Delete("user", "WHERE `id` = $deletedUserId");
        $deletedUser = $deleteUser->deleteData();
        return $deletedUser;
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