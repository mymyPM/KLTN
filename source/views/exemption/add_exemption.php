
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">THÊM LOẠI MIỄN GIẢM MỚI</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Thông tin loại miễn giảm:</h5>
				<form action="admin.php?mod=exemption&act=add_exemption" method="post">
					<div class="sign-u">
								<input type="text" name="txtName" placeholder="Tên loại miễn giảm" required="">
						<div class="clearfix"> </div>
					</div>
					
					<div class="sign-u">
								<input type="text" name="txtRatio" placeholder="Công thức" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
					<label>Thời gian bắt đầu:</label>
								<input type="date" name="txtStart" placeholder="Thời gian bắt đầu" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<label>Thời gian kết thúc:</label>
								<input type="date" name="txtEnd" placeholder="Thời gian kết thúc" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sub_home">
							<input type="submit" value="Submit" name="btnSave">
						<div class="clearfix"> </div>
					</div>
				</form>
				</div>
			