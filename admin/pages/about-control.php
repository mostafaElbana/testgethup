
<div class="grids">
    <div class="progressbar-heading grids-heading">
        <h2>كلام عن ألترا جروب</h2>
    </div>

    <div class="panel panel-widget">
        <div class="tables">
            <h4>كلام عن ألترا جروب</h4>
            <div class="box-body">
                <table id="data" class="table table-bordered table-hover" style="direction: rtl">
                    <thead>
                    <tr>

<th>عنوان الكلام</th>

                        <th>الكلمه</th>
                        <th>التحكم</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include "controllers/aboutController.php" ;
                    $all=selectAllCare();
                    foreach ($all as $value){
                        ?>
                        <tr>
                          <td > <?php echo $value['title'] ; ?></td>
                            <td > <?php echo '<p style="#white-space: nowrap;

    overflow: hidden;
    text-overflow: ellipsis;
    direction:rtl;
     ">'. $value['text'] .'</p>'; ?></td>


                            <td>
                                <form action="home.php?page=about-update" method="post" role="form">
                                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                                    <button name="update" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                                            data-placement="top" title="تعديل" type="submit" ></button>
                                </form>

                                <a  href="controllers/schoolController.php?id=<?php echo  $value['id']; ?>" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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
