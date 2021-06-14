<?php
include_once("source/models/exemption.php");
$scien = new Exemption();
$id = $_GET["id"];
$a = $scien->getExemptionById($id);
?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">SỬA LOẠI MIỄN GIẢM</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Thông tin loại miễn giảm:</h5>
				<form action="admin.php?mod=exemption&act=edit_exemption&id=<?php echo $id ?>" method="post">
					<div class="sign-u">
								<input type="text" name="txtName" value="<?php echo $a["Name"] ?>" placeholder="Tên loại miễn giảm" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="text" name="txtRatio" value="<?php echo $a["Formula"] ?>" placeholder="Công thức" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
					<label>Thời gian bắt đầu:</label>
								<input type="date" name="txtStart" value="<?php echo $a["Start"] ?>" placeholder="Thời gian bắt đầu" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<label>Thời gian kết thúc:</label>
								<input type="date" name="txtEnd" value="<?php echo $a["End"] ?>" placeholder="Thời gian kết thúc" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sub_home">
							<input type="submit" value="Submit"  name="btnSave">
						<div class="clearfix"> </div>
					</div>
				</form>
				</div>
			