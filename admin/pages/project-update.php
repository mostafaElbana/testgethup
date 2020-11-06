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

    $selectUser = new Select("projects");

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
                    <h4> Update</h4>
                </div>
                <div class="form-body">
                    <form action="controllers/productController.php" role="form" method="post"  enctype="multipart/form-data">
                      <div class="form-group"> <label for="exampleInputEmail1"> Title</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="title" required value="<?php echo $data['title'];?>"> </div>
  
                      <div class="form-group"> <label for="exampleInputPassword1"> Cover Image</label>
                          <input type="file" class="form-control" id="exampleInputPassword1"  name="fileToUpload" > </div>
                          <div class="form-group">
     <label  class="" for="type"> Service</label>
   <br>
   <select name="type" class="form-control">
<option value="Mobile application" <?= $data['type']=='Mobile application' ?'selected' :'' ?>>Mobile application</option>
<option value="Website" <?= $data['type']=='Website' ?'selected' :'' ?>>Website</option>
<option value="Printing" <?= $data['type']=='Printing' ?'selected' :'' ?>>Printing</option>
<option value="Branding" <?= $data['type']=='Branding' ?'selected' :'' ?>>Branding</option>
<option value="Social media" <?= $data['type']=='Social media' ?'selected' :'' ?>>Social media</option>
</select>	
												
										
  </div>
                          
                            <input type="hidden" name="image" value="<?php echo $data['cover'];?>">
                            <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                        </div>

                        <button type="submit" class="btn btn-default" name="submitnews">Update</button> </form>
                </div>
            </div>
        </div>
    </div>

</div>
