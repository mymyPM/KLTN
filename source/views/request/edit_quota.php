
        
		<!-- main content start-->
		<?php
		$id = $_GET["id"];
		include_once("source/models/quota.php");
		$quota = new Quota;
		$result = $quota->getQuotaById($id);
        
		?>
		
		
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1"></h2>
				<div class="sign-up-row widget-shadow">
					<h5>Sửa định mức:</h5>
				<form action="admin.php?mod=request&act=edit_quota&id=<?php echo $id ?>" method="post">
					<div class="sign-u">
							<input type="text" name="txtYear" value="<?php echo $result["Year"]?>" placeholder="Năm" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
							<input type="text" name="txtTime" value="<?php echo $result["Time_quota"]?>" placeholder="Số giờ" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sub_home">
							<input type="submit" value="Submit" name="btnRegister">
						<div class="clearfix"> </div>
					</div>
				</form>
				</div>
		    