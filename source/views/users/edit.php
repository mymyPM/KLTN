
		<!-- main content start-->
		<?php
		$id = $_GET["id"];
		?>
		<div id="page-wrapper">
			<div class="main-page">
            <div class="row">
						<h3 class="title1">Sửa thông tin :
                            <div style="float:right"><a href="about.php?mod=users&act=edit&id=<?php echo $id ?>"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></div>
                        </h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="admin.php?mod=users&act=edit&id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Name: </label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="txtName" id="txtName" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Nhập tên user!</p>
									</div>
                                </div>
                                <div class="form-group">
									<label for="focusedinput"  class="col-sm-2 control-label">Username: </label>
									<div class="col-sm-8">
										<input type="email" class="form-control1" name="txtEmail" id="txtEmail" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Nhập Username!</p>
									</div>
                                </div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Password: </label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="txtPassword" id="txtPassword" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Nhập password!</p>
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Authorization:</label>
									<div class="col-sm-8"><select name="txtAuthor" id="txtAuthor" class="form-control1">
										<option value="1">Admin.</option>
										<option value="2">Lecturer</option>
									</select></div>
								</div>
                                <div class="form-group"> 
                                    <label for="exampleInputFile" class="col-sm-2 control-label">File input:</label> 
                                    <input type="file" name="txtImg" id="txtImg" class="col-sm-8" placeholder="choose file">
								 
                                    <p class="help-block">Load ảnh đại diện.</p> 
                                </div> 
								<input type="submit" value="Submit" name="btnEdit" class="btn btn-default" class="col-sm-2 control-label" style="background-color:#F2B33F">			
							</form>
						</div>
					</div>
			</div>
		</div>
		