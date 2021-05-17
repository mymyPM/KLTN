
		<!-- main content start-->
		<?php
		$id = $_GET["id"];
		include_once("source/models/users.php");
		$user = new Users;
		$result = $user->getUserById($id);
		if($result["GroupID"]==1)
		{
			$author = "Admin";
		}
		else
		{
			$author = "Lecturer";
		}
		?>
		<div id="page-wrapper">
			<div class="main-page">
            <div class="row">
						<h3 class="title1">Sửa thông tin :
                            <div style="float:right"><a href="admin.php?mod=users&act=account"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></div>
                        </h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="admin.php?mod=users&act=edit&id=<?php echo $id ?>" method="POST" >
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Name: </label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $result["Name"]?>" class="form-control1" name="txtName" id="txtName" >
									</div>
									<div class="col-sm-2">
										<p class="help-block">Nhập tên user!</p>
									</div>
                                </div>
                                <div class="form-group">
									<label for="focusedinput"  class="col-sm-2 control-label">Username: </label>
									<div class="col-sm-8">
										<input type="email" class="form-control1" value="<?php echo $result["Username"]?>" name="txtEmail" id="txtEmail" >
									</div>
									<div class="col-sm-2">
										<p class="help-block">Nhập Username!</p>
									</div>
                                </div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Password: </label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $result["Password"]?>" class="form-control1" name="txtPassword" id="txtPassword" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Nhập password!</p>
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Authorization:</label>
									<div class="col-sm-8"><select name="txtAuthor" id="txtAuthor" class="form-control1" >
									<option selected="selected" value="<?php echo $result["GroupID"];?>" ><?php echo $author?></option>
									<?php
									if($result["GroupID"]==2)
										echo "<option value=\"1\">Admin</option>";
									else	
										echo "<option value=\"2\">Lecturer</option>"
									?>
									</select></div>
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
		