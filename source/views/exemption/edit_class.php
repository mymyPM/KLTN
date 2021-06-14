<?php
include_once("source/models/classify.php");
$class = new Classify();
$id = $_GET["id"];
$c = $class->getClassById($id)
?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">SỬA LOẠI GIẢNG VIÊN</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Thông tin loại giảng viên:</h5>
				<form action="admin.php?mod=exemption&act=edit_class&id=<?php echo $id ?>" method="post">
					<div class="sign-u">
								<input type="text" name="txtName" value="<?php echo $c["ClassName"]?>" placeholder="Tên loại giảng viên" required="">
						<div class="clearfix"> </div>
					</div>					
					<div class="sub_home">
							<input type="submit" value="Submit" name="btnSave">
						<div class="clearfix"> </div>
					</div>
				</form>
				</div>
			