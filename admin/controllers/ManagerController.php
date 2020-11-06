<?php

   /* session_save_path("/home/users/web/b2830/ipg.rehltycom/cgi-bin/tmp");
  session_start();

    if( !isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] != 1 )
    {
        die("<meta http-equiv='refresh' content='0; url=index.php'> ");
    }*/
    # to show all users in site to root ..
    //$selectedUsers = selectAllUsers();
    /*
    # to delete user from users table in site by root ..
    if (isset($_GET)) {
        print_r($_GET);
    }/*
    $deletedUser = deleteDataOfOneUser($deletedUserId);
    echo $deletedUser;*/    
    
    function selectAllUsers(){
        $dir =  dirname(dirname(__FILE__));
        $fullGeneralPath = $dir."/models/General.php";
        $fullSelectPath = $dir."/models/Select.php";
        
        require_once $fullGeneralPath;		
        require_once $fullSelectPath;
        
        $selectUsers = new Select("user");
        $selectedUsers = $selectUsers->getAllData();
        
        return $selectedUsers;
    }
    /*
    function deleteDataOfOneUser($deletedUserId){
        $dir =  dirname(dirname(__FILE__));
        $fullGeneralPath = $dir."/models/General.php";
        $fullSelectPath = $dir."/models/Delete.php";
        
        require $fullGeneralPath;		
        require $fullSelectPath;
        
        $deleteUser = new Delete("users", "WHERE `id` = $deletedUserId");
        $deletedUser = $deleteUser->deleteData();
        return $deletedUser;
    }*/
