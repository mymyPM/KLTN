
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">SignUp Here</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Personal Information :</h5>
				<form action="admin.php?mod=users&act=add_account" method="post">
					<div class="sign-u">
								<input type="text" name="txtName" placeholder="Name" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="email" name="txtEmail" placeholder="Email Address" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Group* :</h4>
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
					<h6>Login Information :</h6>
					<div class="sign-u">
								<input type="password" name="txtPassword" placeholder="Password" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="password" name="txtConfirm" placeholder="Confirm Password" required="">
						</div>
						<div class="clearfix"> 
					</div>
					<div class="sign-u">
								<input type="file" name="txtImg" placeholder="choose file" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sub_home">
							<input type="submit" value="Submit" name="btnRegister">
						<div class="clearfix"> </div>
					</div>
					<div class="registration">
						Already Registered.
						<a class="" href="login.html">
							Login
						</a>
					</div>
				</form>
				</div>
			