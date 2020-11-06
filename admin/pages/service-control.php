
<div class="grids">
    <div class="progressbar-heading grids-heading">
        <h2>كل الخدمات</h2>
    </div>

    <div class="panel panel-widget">
        <div class="tables">
            <h4>الخدمات</h4>
            <div class="box-body">
                <table id="data" class="table table-bordered table-hover" style="direction: rtl">
                    <thead>
                    <tr>

                        <th>اسم العميل</th>
                        <th>التليفون</th>
                        <th> البريد الالكترونى</th>
                            <th>نوع الخدمه</th>
                            <th>العنوان</th>
                            <th>المختوى</th>
                        <th>التحكم</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include "controllers/serviceController.php" ;
                    $all=selectAllCare();
                    foreach ($all as $value){
                        ?>
                        <tr>

                            <td> <?php echo $value['customer_name']; ?></td>
                            <td> <?php echo $value['phone']; ?></td>
                            <td> <?php echo $value['email']; ?></td>
                              <td> <?php echo $value['type']; ?></td>
                             <td> <?php echo $value['address']; ?></td>
                               <td> <?php echo $value['text']; ?></td>
                            <td>
                              

                                <a  href="controllers/serviceController.php?id=<?php echo  $value['id']; ?>" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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
