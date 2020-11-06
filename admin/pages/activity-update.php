<?php
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

    $selectUser = new Select("activity_school");

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
                    <h4>تعديل النشاط </h4>
                </div>
                <div class="form-body">
                    <form action="controllers/activityController.php" role="form" method="post"  enctype="multipart/form-data">
                        <div class="form-group"> <label for="exampleInputEmail1">عنوان النشاط</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""name="title" value="<?php echo $data['title'];?>"> </div>

                        <div class="form-group"> <label for="exampleInputPassword1">محتوى النشاط</label>
                            <textarea name="desc" style="width: 100%; direction: rtl;" rows="4"><?php  echo  $data['content'];?></textarea> </div>



                        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                </div>

                <button type="submit" class="btn btn-default" name="submitnews">تعديل</button> </form>
            </div>
        </div>
    </div>
</div>

</div>


