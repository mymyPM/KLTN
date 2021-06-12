<?php
$id = $_GET["id"];
include_once("source/models/plan.php");
$plan = new Plan;
$result = $plan->getPlanById($id);
?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">SỬA ĐỢT XÉT</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Thông tin đợt xét:</h5>
				<form action="admin.php?mod=request&act=edit_plan&id=<?php echo $id ?>" method="post">
					<div class="sign-u">
								<input type="text" name="txtName" value="<?php echo $result["Name"] ?>" placeholder="Tên đợt xét" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="text" name="txtDesc" value="<?php echo $result["Description"] ?>" placeholder="Mô tả" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="text" name="txtYear" value="<?php echo $result["Year"] ?>" placeholder="Năm" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="text" name="txtTime" value="<?php echo $result["Times"] ?>" placeholder="Lần xét" required="">
						</div>
						<div class="clearfix"> 
					</div>
                    <div class="sign-u">
								<input type="date" name="txtStart" value="<?php echo $result["Start"] ?>" placeholder="Ngày bắt đầu" required="">
						</div>
						<div class="clearfix"> 
					</div>
                    <div class="sign-u">
								<input type="date" name="txtEnd" value="<?php echo $result["End"] ?>" placeholder="Ngày kết thúc" required="">
						</div>
						<div class="clearfix"> 
					</div>
					<div class="sub_home">
							<input type="submit" value="Submit" name="btnRegister">
						<div class="clearfix"> </div>
					</div>
				</form>
				</div>
			