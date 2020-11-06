<?php
    //session_save_path("/home/users/web/b2830/ipg.rehltycom/cgi-bin/tmp");
    session_start();
    if(isset($_POST['LogInMember']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $selectedUser = selectUsersIF($username, $password);
        if (mysqli_num_rows($selectedUser) > 0) {
            while ( $row = mysqli_fetch_array($selectedUser , MYSQLI_ASSOC)){
                $_SESSION['LoggedIn'] = 1;

                 
                $_SESSION['Username'] = $row['username'];
                $_SESSION['Password'] = $row['password'];
                $_SESSION['Id'] = $row['id'];

                $d = dirname(dirname(__FILE__))."/home.php";
                echo "<meta http-equiv='refresh' content='0; url=../home.php'> ";
            }
        }else{
            $_SESSION['Errors'] = "يجب أن يكون اسم المستخدم وكلمة السر صحيحين ";
            echo "<meta http-equiv='refresh' content='0; url=../index.php'> ";
        }
    }

    function selectUsersIF($username , $password)
    {
       
        $dir =  dirname(dirname(__FILE__));
        $fullGeneralPath = $dir."/models/General.php";
        $fullSelectPath = $dir."/models/Select.php";
        
        require_once $fullGeneralPath;		
        require_once $fullSelectPath;

        $selectUser = new Select("user");
        $encPassword = $password;
        
        $selectedUser = $selectUser->getDataWhere($username , $encPassword);

        return $selectedUser;
    }