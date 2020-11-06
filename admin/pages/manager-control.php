
<div class="grids">
    <div class="progressbar-heading grids-heading">
        <h2>الاعضاء</h2>
    </div>

    <div class="panel panel-widget">
        <div class="tables">
            <h4>االمدرين </h4>
            <div class="box-body">
                <table id="data" class="table table-bordered table-hover" style="direction: rtl">
                    <thead>
                    <tr>




                        <th>اسم العضو</th>
                        <th>الايميل</th>
                        <th>التحكم</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include "controllers/ManagerController.php" ;
                    $all=selectAllUsers();
                    foreach ($all as $value){
                        ?>
                        <tr>
                            <td> <?php echo $value['username']; ?></td>
                            <td> <?php echo $value['email']; ?></td>



                            <td>
                                <form action="home.php?page=manager-update" method="post" role="form">
                                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                                    <button name="update" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                                            data-placement="top" title="تعديل" type="submit" ></button>
                                </form>

                                <a  href="controllers/UpdateUserController.php?id=<?php echo  $value['id']; ?>" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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
