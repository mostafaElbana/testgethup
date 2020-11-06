
<div class="grids">
    <div class="progressbar-heading grids-heading">
        <h2>الاخبار</h2>
    </div>

    <div class="panel panel-widget">
        <div class="tables">
            <h4>الاخبار </h4>
            <div class="box-body">
                <table id="data" class="table table-bordered table-hover" style="direction: rtl">
                    <thead>
                    <tr>



                        <th>صور الخبر</th>
                        <th>التحكم</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include "controllers/newsController.php" ;
                    $all=selectAllCare();
                    foreach ($all as $value){
                        ?>
                        <tr>


                            <td> <img src="<?php echo  str_replace("../","",$value['img']); ?>" height="50" width="100"></td>

                            <td>
                                <form action="home.php?page=news-update" method="post" role="form">
                                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                                    <button name="update" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                                            data-placement="top" title="تعديل" type="submit" ></button>
                                </form>

                                <a  href="controllers/newsController.php?id=<?php echo  $value['id']; ?>" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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
