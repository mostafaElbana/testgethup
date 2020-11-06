
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>محتوى الصفحه الرئيسيه</h2>
					</div>

					<div class="panel panel-widget">
						<div class="tables">
							<h4>كل محتوى الرئيسيه</h4>
							<div class="box-body">
								<table id="data" class="table table-bordered table-hover" style="direction: rtl">
									<thead>
									<tr>

										<th>العنوان</th>
										<th>المحتوى</th>

										<th>التحكم</th>
									</tr>
									</thead>
									<tbody>
<?php
include "controllers/homeController.php" ;
$all=selectAllCare();
foreach ($all as $value){
?>
 <tr>

	 <td> <?php echo $value['title']; ?></td>
	 <td> <?php echo $value['text']; ?></td>

	 <td>
		 <form action="home.php?page=home-update" method="post" role="form">
			 <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
			 <button name="update" class="glyphicon glyphicon-pencil" data-toggle="tooltip"
					 data-placement="top" title="تعديل" type="submit" ></button>
		 </form>

		 <a  href="controllers/homeController.php?id=<?php echo  $value['id']; ?>" class="glyphicon glyphicon-remove" data-toggle="tooltip"
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
