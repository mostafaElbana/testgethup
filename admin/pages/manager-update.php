<?php 
    if (isset($_POST['update'])) {
        $selectedUserId = $_POST['id'];
        $data = getDataFromUserWhere($selectedUserId);
        if (mysqli_num_rows($data) > 0) {
            $data = mysqli_fetch_array($data , MYSQLI_ASSOC);
            #print_r($data);
        }
    }
    
    function getDataFromUserWhere($id){
        $dir =  dirname(dirname(__FILE__));
        $fullGeneralPath = $dir."/models/General.php";
        $fullSelectPath = $dir."/models/Select.php";
        
        require_once $fullGeneralPath;		
        require_once $fullSelectPath;
        
        $selectUser = new Select("user");
        
        $selectedUser = $selectUser->getDataById($id);

        return $selectedUser;
    }
?>
 <div class="page_content">

                  





     <body class="login-bg">
     <div class="login-body">
         <div class="login-heading">
             <h1>تعديل عضو جديد</h1>
         </div>
         <div class="login-info">
             <form action="controllers/UpdateUserController.php" role="form" method="post">
                 <input type="text" class="user" name="username" placeholder="UserName" required="" value="<?php  echo $data['username']?>">
                 <input type="text" class="user" name="email" placeholder="Email" required="" value="<?php  echo $data['email']?>">
                 <input type="password" name="password" class="lock" placeholder="Password">
                 <input type="password" name="cpassword" class="lock" placeholder="Confirm Password">
                 <input type="hidden" class="user" name="id"  value="<?php  echo $data['id']?>">
                 <input type="submit" name="submitUserEdit" value=" Edit Sign up">

             </form>
         </div>
     </div>