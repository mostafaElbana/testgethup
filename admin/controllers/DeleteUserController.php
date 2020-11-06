<?php

  /*  session_save_path("/home/users/web/b2830/ipg.rehltycom/cgi-bin/tmp");
    session_start();

    if( !isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] != 1 )
    {
        die("<meta http-equiv='refresh' content='0; url=index.php'> ");
    }
    */
    # to delete user from users table in site by root ..
    if (isset($_GET)) {
        $deletedUserId = $_GET['id'];
    }
    $deletedUser = deleteDataOfOneUser($deletedUserId);
    if ($deletedUser == 1) {
        die("<meta http-equiv='refresh' content='0; url=../home.php?page=manager-control'> ");
    }else{
        $_SESSION['ManagerError'] = "error";
        die("<meta http-equiv='refresh' content='0; url=../home.php?page=manager-control'> ");
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