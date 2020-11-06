
<?php

/*  session_save_path("/home/users/web/b2830/ipg.rehltycom/cgi-bin/tmp");
  session_start();

 if( !isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] != 1 )
  {
      die("<meta http-equiv='refresh' content='0; url=index.php'> ");
  }*/
#show all cares ..
// $selectedCares = selectAllCare();


# add an care ..
if (isset($_POST['submit'])) {
  $addedCare=0;
    $data['id'] = "";

    $images_arr = array();
    foreach($_FILES['file']['name'] as $key=>$val){
        //upload and stored images
        $target_dir = "../images/";
        $target_file = $target_dir.date("s").basename($_FILES['file']['name'][$key]);
 $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
 if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
           && $imageFileType != "gif"
       ) {
         echo '<script type="text/javascript">
           alert( "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
         </script>';
           echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

       }else {
         $data['img']=$target_file;
         $addedCare= insertIntoImage($data);
         if(move_uploaded_file($_FILES['file']['tmp_name'][$key],$target_file)){
             $images_arr[] = $target_file;
         }
       }

    }



    if ($addedCare == 1) {
       die("<meta http-equiv='refresh' content='0; url=../home.php?page=imagehome-control'> ");
    }else{
        $_SESSION['CareError'] = "Add error";
       die("<meta http-equiv='refresh' content='0; url=../home.php?page=imagehome-control'> ");
    }
}

# delete an care
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $care_id = $_GET['id'];
    $file= selectCareName($care_id);
    unlink($file);
    $deletedCare = deleteDataOfOneCare($care_id);



    if ($deletedCare == 1) {
        die("<meta http-equiv='refresh' content='0; url=../home.php?page=imagehome-control'> ");
    }else{
        $_SESSION['IncubError'] = "error";
        die("<meta http-equiv='refresh' content='0; url=../home.php?page=imagehome-control'> ");
    }
}

#update an care data ..
if (isset($_POST['submitnews'])) {
    $care_id = $_POST['id'];
    $file=$_POST['image1'];
    unlink($file);
    $deletedCare = deleteDataOfOneCare($care_id);

    $data['id'] = $care_id;
    $target_dir = "../images/";
    $target_file =$target_dir . date("s"). basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
     //   echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
      //  echo " <script> alert('File is not an image.');</script>";
        $uploadOk = 0;

    }
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
              && $imageFileType != "gif"
          ) {
            echo '<script type="text/javascript">
              alert( "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
            </script>';
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
     $uploadOk = 0;
          }
// Check if file already exists
    if (file_exists($target_file)) {
       echo " <script> alert('Sorry, file already exists.');</script>";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000000) {
      //  echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo " <script> alert('Sorry, your file was not uploaded.');</script>";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         //   echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        } else {
           // echo " <script> alert('Sorry, there was an error uploading your file.');</script>";
        }
    }
    $data['img']=$target_file;
    $addedCare = insertIntoImage($data);


    if ($addedCare == 1) {
        die("<meta http-equiv='refresh' content='0; url=../home.php?page=imagehome-control'> ");
    }else{
        $_SESSION['CareError'] = "Add error";
       die("<meta http-equiv='refresh' content='0; url=../home.php?page=imagehome-control'> ");
    }
}


function selectAllCare(){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Select.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $selectCares = new Select("slide");
    $selectedCares = $selectCares->getAllData();

    return $selectedCares;
}
function selectCare(){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Select.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $selectCares = new Select("slide");
    $selectedCares = $selectCares-> getCareDataByname($_SESSION['name']);

    return $selectedCares;
}

function insertIntoImage($data){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Insert.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $insertCare = new Insert($data , "slide");
    $insertedCare = $insertCare->addData();
    return $insertedCare;
}

function deleteDataOfOneCare($care_id){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Delete.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $deleteCare = new Delete("slide", "WHERE `id` = $care_id");
    $deletedCare = $deleteCare->deleteData();
    return $deletedCare;
}

#delete............................
#select doctor  name...
function selectCareName($care_id){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Select.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $selectCares = new Select("slide");
    $selectedCares = $selectCares-> getNewsDataById($care_id);
    $data = mysqli_fetch_array($selectedCares , MYSQLI_ASSOC);



    return $data['image'];
}

####get data by name
function getDataFromUserWhere($id){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Select.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $selectUser = new Select("slide");

    $selectedUser = $selectUser->getShopDataByname($id);

    return mysqli_num_rows($selectedUser);
}

####get data by name
function getnum($id){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Select.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $selectUser = new Select("slide");

    $selectedUser = $selectUser->getShopDataByname($id);

    $data = mysqli_fetch_array($selectedUser , MYSQLI_ASSOC);



    return $data['number'];
}

function getnumofprudect($id){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Select.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $selectUser = new Select("slide");

    $selectedUser = $selectUser->getShopDataByname($id);

    return mysqli_num_rows($selectedUser);
}
function getnumofimage($id){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Select.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $selectUser = new Select("slide");

    $selectedUser = $selectUser->getShopDataByname($id);

    return mysqli_num_rows($selectedUser);
}
