
<!-- main content start-->

<!--grids-->
<div class="grids">

    <div class="panel panel-widget forms-panel">
        <div class="forms">
            <div class="form-grids widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>projects</h4>
                </div>
                <div class="form-body">
                    <form action="controllers/productController.php" role="form" method="post"  enctype="multipart/form-data">
                        <div class="form-group"> <label for="exampleInputEmail1"> title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" required=""> </div>
 
                        <div class="form-group"> <label for="exampleInputPassword1"> image Cover</label>
                            <input type="file" class="form-control" id="exampleInputPassword1" placeholder=" " name="fileToUpload" required=""> </div>
      
    <div class="form-group">
     <label  class="" for="type"> Service</label>
   <br>
			<select name="type" class="form-control">
<option value="Mobile application">Mobile application</option>
<option value="Website">Website</option>
<option value="Printing">Printing</option>
<option value="Branding">Branding</option>
<option value="Social media">Social media</option>
</select>									
										
  </div>
 


                        <button type="submit" class="btn btn-default" name="submit">save project</button> </form>
                </div>
            </div>
        </div>
    </div>

</div>
