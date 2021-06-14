<?php
include_once("source/models/department.php");
$class = new Department();
$id = $_GET["id"];
$c = $class->getDepartById($id)
?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">SỬA ĐƠN VỊ</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Thông tin đơn vị:</h5>
				<form action="admin.php?mod=exemption&act=edit_depart&id=<?php echo $id ?>" method="post">
					<div class="sign-u">
								<input type="text" name="txtName" value="<?php echo $c["DepartName"]?>" placeholder="Tên đơn vị" required="">
						<div class="clearfix"> </div>
					</div>					
					<div class="sub_home">
							<input type="submit" value="Submit" name="btnSave">
						<div class="clearfix"> </div>
					</div>
				</form>
				</div>
			