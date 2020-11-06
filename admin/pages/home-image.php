
<!-- main content start-->

<!--grids-->
<div class="grids">

    <div class="panel panel-widget forms-panel">
        <div class="forms">
            <div class="form-grids widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>معرض صور  </h4>
                </div>
                <div class="form-body">
                    <form action="controllers/imagehomeController.php" role="form" method="post"  enctype="multipart/form-data">
                        <div class="alert alert-warning" style="width: 100%; direction: rtl ">
                            وذلك لحسن المظهر فى الموقع	من فضلك لابد ان تكون مقاس الصوره (1580 782x )
                        </div>
                        <div class="form-group"> <label for="exampleInputPassword1">الصور </label>
                            <input type="file" class="form-control" id="exampleInputPassword1" placeholder=" صور الرئيسيه" name="file[]" multiple required="choose image"> </div>


                        <button type="submit" class="btn btn-default" name="submit">حفظ</button> </form>
                </div>
            </div>
        </div>
    </div>

</div>
