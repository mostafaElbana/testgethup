<?php
$selectedUserId=0;
if (isset($_POST['update'])) {
    $selectedUserId = $_POST['id'];
    $data = getDataFromUserWhere($selectedUserId);

    if (mysqli_num_rows($data) > 0) {
        $data = mysqli_fetch_array($data , MYSQLI_ASSOC);
        #print_r($data);
    }



}
// print_r($T);
function getDataFromUserWhere($id){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Select.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $selectUser = new Select("news_image_school");

    $selectedUser = $selectUser->getDataById($id);

    return $selectedUser;
}

?>
<!-- main content start-->

<!--grids-->
<div class="grids">

    <div class="panel panel-widget forms-panel">
        <div class="forms">
            <div class="form-grids widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>تعديل الصوره </h4>
                </div>
                <div class="form-body">
                    <form action="controllers/newsimageController.php" role="form" method="post"  enctype="multipart/form-data">
                        <div class="alert alert-warning" style="width: 100%; direction: rtl ">
                            وذلك لحسن المظهر فى الموقع	من فضلك لابد ان تكون مقاس الصوره (600 300x )
                        </div>
                        <div class="form-group"> <label for="exampleInputPassword1">صوره الخبر</label>
                            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="صوره " name="fileToUpload"> </div>
                        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                        <input type="hidden" name="id1" value="<?php echo $_POST['id1'];?>">
                        <input type="hidden" name="image1" value="<?php echo $data['image'];?>">
                </div>

                <button type="submit" class="btn btn-default" name="submitnews">تعديل</button> </form>
            </div>
        </div>
    </div>
</div>

</div>


