
		<!-- main content start-->
		<?php
		$id = $_GET["id"];
		include_once("source/models/users.php");
		$user = new Users;
		$result = $user->getUserById($id);
		?>
		<div id="page-wrapper">
			<div class="main-page">
            <div class="row">
						<h3 class="title1">Sửa thông tin :
                            <div style="float:right"><a href="admin.php?mod=users&act=account"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></div>
                        </h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="admin.php?mod=users&act=edit_info&id=<?php echo $id ?>" method="POST"  >
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Name: </label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $result["Name"]?>" class="form-control1" name="txtName" id="txtName" >
									</div>
									<div class="col-sm-2">
										<p class="help-block">Nhập họ và tên!</p>
									</div>
                                </div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Phone: </label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $result["Phone"]?>" class="form-control1" name="txtPhone" id="txtPassword" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Nhập sđt!</p>
									</div>
								</div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Birthday: </label>
									<div class="col-sm-8">
										<input type="date" value="<?php echo $result["Birthday"]?>" class="form-control1" name="txtBirthday" id="txtPassword" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Nhập ngày sinh!</p>
									</div>
								</div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Address: </label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $result["Address"]?>" class="form-control1" name="txtAddress" id="txtPassword" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Nhập địa chỉ!</p>
									</div>
								</div>
                                <div class="form-group"> 
                                    <label for="exampleInputFile" class="col-sm-2 control-label">File input:</label> 
                                    <input type="file" name="txtImg" class="col-sm-8" placeholder="choose file" ">				 
                                    <p class="help-block">Load ảnh đại diện.</p> 
                                </div> 
								<input type="submit" value="Submit" name="btnEdit" class="btn btn-default" class="col-sm-2 control-label" style="background-color:#F2B33F">			
							</form>
						</div>
					</div>
			</div>
		</div>
		