<?php
if (isset($_POST['update'])) {
    $selectedUserId = $_POST['id'];
    $data = getDataFromUserWhere($selectedUserId);

   // if (mysqli_num_rows($data) > 0) {
       // $data = mysqli_fetch_array($data , MYSQLI_ASSOC);
        #print_r($data);
 //   }



}
// print_r($T);
function getDataFromUserWhere($id){
    $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = $dir."/models/General.php";
    $fullSelectPath = $dir."/models/Select.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $selectUser = new Select("product_img");

    $selectedUser = $selectUser->getDataByIdactivity($id);

    return $selectedUser;
}

?>
<div class="grids">
    <div class="progressbar-heading grids-heading">
        <h2>Project Images</h2>
    </div>

    <div class="panel panel-widget">
        <div class="tables">
            <h4>project images</h4>
            <div class="box-body">
                <table id="data" class="table table-bordered table-hover" >
                    <thead>
                    <tr>

                      
                        <th>Control</th>


                        <th>Image</th>
                          <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                   $all=$data;
                    foreach ($all as $value){
                        ?>
                        <tr>
 <td>
                                <form action="home.php?page=product_image-update" method="post" role="form">
                                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                                    <input type="hidden" name="id1" value="<?php echo $value['product_id']; ?>">
                                    <button name="update" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                                            data-placement="top" title="تعديل" type="submit" ></button>
                                </form>

                                <a  href="controllers/productimageController.php?id=<?php echo  $value['id']; ?>" class="glyphicon glyphicon-remove" data-toggle="tooltip"
                                    data-placement="top" title="حذف"></a>
                            </td>
                             <td> <img src="<?php echo  str_replace("../","",$value['img']); ?>" height="50" width="100"></td>


                            <td> <?php echo $value['id']; ?></td>

                           
                           
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>

                </table>
            </div>	</div>
    </div>

</div>
<!--//grids-->
