<?php
include_once("source/models/users.php");
$user = new Users();
$class = $user->getClassify();
$depart = $user->getDepartment();

?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">THÊM TÀI KHOẢN MỚI</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Thông tin tài khoản:</h5>
				<form action="admin.php?mod=users&act=add_account" method="post" enctype="multipart/form-data">
					<div class="sign-u">
								<input type="text" name="txtName" placeholder="Tên tài khoản" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="email" name="txtEmail" placeholder="Địa chỉ email" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Phân quyền:</h4>
						</div>
						<div class="sign-up2">
							<label>
								<input type="radio" value="Admin" name="Group" id="1" required="">
								Admin
							</label>
							<label>
								<input type="radio" value="Lecturer" name="Group" id="2" required="">
								Lecturer
							</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Phân loại:</h4>
						</div>
						<div class="sign-up2">
						<select name="classify">
							<option style="size: 30px;" value="">--Chọn--</option>
						<?php
							foreach($class as $key => $row)
							{
								$id = $key+1;
								echo "<option value='$id'>";
								echo $row['Name1'];
								echo "</option>";
							}
						?>
    					</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Phân ngành:</h4>
						</div>
						<div class="sign-up2">
						<select name="department">
							<option style="" value="">--Chọn--</option>
						<?php
							foreach($depart as $key => $row)
							{
								$id = $key+1;
								echo "<option value='$id'>";
								echo $row['Name2'];
								echo "</option>";
							}
						?>
    					</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<h6>Thông tin đăng nhập:</h6>
					<div class="sign-u">
								<input type="password" name="txtPassword" placeholder="Mật khẩu" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="password" name="txtConfirm" placeholder="Nhập lại mật khẩu" required="">
						</div>
						<div class="clearfix"> 
					</div>
					
					<div class="sub_home">
							<input type="submit" value="Submit" name="btnRegister">
						<div class="clearfix"> </div>
					</div>
				</form>
				</div>
			