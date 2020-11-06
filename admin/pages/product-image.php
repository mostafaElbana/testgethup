
<!-- main content start-->
<?php  if (isset($_POST['submit']))
$id=$_POST['id'];
?>
<!--grids-->
<div class="grids">

    <div class="panel panel-widget forms-panel">
        <div class="forms">
            <div class="form-grids widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>project Images</h4>
                </div>
                <div class="form-body">
                    <form action="controllers/productimageController.php" role="form" method="post"  enctype="multipart/form-data">
                        <div class="alert alert-warning" style="width: 100%; direction: rtl ">
                    وذللك لحسن الاداء وعدم وجود اى مشاكل لابد من التأكد من نوع الصوره  ان تكون  ( JPG, JPEG, PNG & GIF)
                        </div>
                        <div class="form-group"> <label for="exampleInputPassword1"> projct Images</label>
                            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="" name="file[]" multiple> </div>
                       <input type="hidden" name="id" value="<?php  echo $_POST['id']; ?>">



                        <button type="submit" class="btn btn-default" name="submitimage">Save</button> </form>
                </div>
            </div>
        </div>
    </div>

</div>
