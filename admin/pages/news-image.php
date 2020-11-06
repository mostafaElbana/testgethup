
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
                    <h4>صورالاخبار المدرسيه </h4>
                </div>
                <div class="form-body">
                    <form action="controllers/newsimageController.php" role="form" method="post"  enctype="multipart/form-data">
                        <div class="alert alert-warning" style="width: 100%; direction: rtl ">
                            وذلك لحسن المظهر فى الموقع	من فضلك لابد ان تكون مقاس الصوره (600 300x )
                        </div>
                        <div class="form-group"> <label for="exampleInputPassword1"> صور الخبر</label>
                            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="" name="file[]" multiple> </div>
                        <input type="hidden" name="id" value="<?php  echo $_POST['id']; ?>">



                        <button type="submit" class="btn btn-default" name="submitimage">حفظ</button> </form>
                </div>
            </div>
        </div>
    </div>

</div>
						
					
		