<?php
include_once("source/models/scientific_research.php");
$scien = new Scientific();
$id = $_GET["id"];
$a = $scien->getgetScientificById($id);
?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">SỬA DANH MỤC</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Thông tin danh mục NCKH:</h5>
				<form action="admin.php?mod=exemption&act=edit_scientific&id=<?php echo $id ?>" method="post">
					<div class="sign-u">
								<input type="text" name="txtLoai" value="<?php echo $a["Name_scien"]?>"  placeholder="Loại đề tài" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="text" name="txtTime" value="<?php echo $a["Time"]?>" placeholder="Số giờ" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="text" name="txtMoney" value="<?php echo $a["Expense"]?>" placeholder="Kinh phí" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
					
								<input type="text" name="txtProof" value="<?php echo $a["Proof"]?>" placeholder="Minh chứng" required="">
						<div class="clearfix"> </div>
					</div>
					
					<div class="sub_home">
							<input type="submit" value="Submit" name="btnSave">
						<div class="clearfix"> </div>
					</div>
				</form>
				</div>
			