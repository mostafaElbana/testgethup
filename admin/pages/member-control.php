
<div class="grids">
    <div class="progressbar-heading grids-heading">
        <h2>كل الاعضاء المشتركين</h2>
    </div>

    <div class="panel panel-widget">
        <div class="tables">
            <h4>المشتركين</h4>
            <div class="box-body">
                <table id="data" class="table table-bordered table-hover" style="direction: rtl">
                    <thead>
                    <tr>

                        <th>#</th>
                        <th>الايميل</th>


                        <th>التحكم</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include "controllers/memberController.php" ;
                    $all=selectAllCare();
                    foreach ($all as $value){
                        ?>
                        <tr>

                            <td> <?php echo $value['id']; ?></td>

                            <td> <a href="mailto:<?php echo $value['email']; ?>" target="_top"><?php echo $value['email']; ?></a></td>


                            <td>


                                <a  href="controllers/memberController.php?id=<?php echo  $value['id']; ?>" class="glyphicon glyphicon-remove" data-toggle="tooltip"
                                    data-placement="top" title="حذف"></a>
                            </td>
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
