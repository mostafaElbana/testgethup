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
    $data['id'] = "";
      $data['title'] = rtrim(ltrim(htmlentities($_POST['title'])));
    $data['text'] = rtrim(ltrim(htmlentities($_POST['text'])));

    $addedCare = insertIntoImage($data);




    if ($addedCare == 1) {
        die("<meta http-equiv='refresh' content='0; url=../home.php?page=about-control'> ");
    }else{
        $_SESSION['CareError'] = "Add error";
        die("<meta http-equiv='refresh' content='0; url=../home.php?page=about-control'> ");
    }
}

# delete an care
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $care_id = $_GET['id'];

    $deletedCare = deleteDataOfOneCare($care_id);



    if ($deletedCare == 1) {
        die("<meta http-equiv='refresh' content='0; url=../home.php?page=about-control'> ");
    }else{
        $_SESSION['IncubError'] = "error";
        die("<meta http-equiv='refresh' content='0; url=../home.php?page=about-control'> ");
    }
}

#update an care data ..
if (isset($_POST['submitnews'])) {
    $care_id = $_POST['id'];

    $deletedCare = deleteDataOfOneCare($care_id);

    $data['id'] = $care_id;
      $data['title'] = rtrim(ltrim(htmlentities($_POST['title'])));
    $data['text'] = rtrim(ltrim(htmlentities($_POST['text'])));

    $addedCare = insertIntoImage($data);


    if ($addedCare == 1) {
        die("<meta http-equiv='refresh' content='0; url=../home.php?page=about-control'> ");
    }else{
        $_SESSION['CareError'] = "Add error";
        die("<meta http-equiv='refresh' content='0; url=../home.php?page=about-control'> ");
    }
}


function selectAllCare(){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Select.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $selectCares = new Select("about");
    $selectedCares = $selectCares->getAllData();

    return $selectedCares;
}
function selectCare(){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Select.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $selectCares = new Select("about");
    $selectedCares = $selectCares-> getCareDataByname($_SESSION['name']);

    return $selectedCares;
}

function insertIntoImage($data){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Insert.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $insertCare = new Insert($data , "about");
    $insertedCare = $insertCare->addData();
    return $insertedCare;
}

function deleteDataOfOneCare($care_id){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Delete.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $deleteCare = new Delete("about", "WHERE `id` = $care_id");
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

    $selectCares = new Select("about");
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

    $selectUser = new Select("about");

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

    $selectUser = new Select("about");

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

    $selectUser = new Select("about");

    $selectedUser = $selectUser->getShopDataByname($id);

    return mysqli_num_rows($selectedUser);
}
function getnumofimage($id){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Select.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $selectUser = new Select("about");

    $selectedUser = $selectUser->getShopDataByname($id);

    return mysqli_num_rows($selectedUser);
}
