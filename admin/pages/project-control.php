
<div class="grids">
    <div class="progressbar-heading grids-heading">
        <h2>projects</h2>
    </div>

    <div class="panel panel-widget">
        <div class="tables">
            <h4>Our projects</h4>
            <div class="box-body">
                <table id="data" class="table table-bordered table-hover" >
                    <thead>
                    <tr>

                        
                       
                      
                          
                        <th>Control</th>
                       
                          <th>Service</th>
                         <th>Cover Image</th>
                        <th>Title</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include "controllers/productController.php" ;
                    $all=selectAllCare();
                    foreach ($all as $value){
                        ?>
                        <tr>
 <td>
                                <form action="home.php?page=project-update" method="post" role="form">
                                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                                    <button name="update" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                                            data-placement="top" title="تعديل" type="submit" ></button>
                                </form>

                                <a  href="controllers/productController.php?id=<?php echo  $value['id']; ?>" class="glyphicon glyphicon-remove" data-toggle="tooltip"
                                    data-placement="top" title="حذف"    onclick="if(!confirm('Are you sure?')) return false;"></a>
                            </td>
                            
 <td> <?=  $value['type'] ?></td>
  <td> <img src="<?php echo  str_replace("../","",$value['cover']); ?>" height="50" width="150"></td>
                           
                            <td> <?php echo $value['title']; ?></td>
                             
                             

                           
                           
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
