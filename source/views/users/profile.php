
		<!-- main content start-->
		
		<div id="page-wrapper">
			<div class="main-page">
            <div class="row">
						<h3 class="title1">Sửa thông tin :
                            <div style="float:right"><a href="admin.php?mod=users&act=account"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></div>
                        </h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="pesonal.php?mod=users&act=profile_img&id=<?php echo $id ?>" method="POST" enctype="multipart/form-data"  >
                                <div class="col-sm-2">
                                    <img src="<?php echo $result["Img"]?>" width="250px" height="300px"/>
                                    <div class="form-group" >  
                                    <label for="uploadFile" style="float:left, margin-top:10px" class="btn btn-primary " >Đổi ảnh</label>
                                    <label for="btnEdit1" style="float:left, margin-left:500px" class="btn btn-primary " width="100%" height="100%">OK</label>
                                    <input type="file" style="display:none" id="uploadFile" name="uploadFile" value="<?php echo $result["Img"] ?>" class="col-sm-8" placeholder="choose file" ">				 
                                
                                </div>                 
								<input type="submit" style="display:none" id="btnEdit1" style="margin-left:100px" value="OK" name="btnEdit1" class="btn btn-default" class="col-sm-2 control-label" style="background-color:#F2B33F">			
							    </div>
                            </form>
                            <form class="form-horizontal" action="pesonal.php?mod=users&act=profile&id=<?php echo $id ?>" method="POST" enctype="multipart/form-data"  >    
                                <div class="col-sm-10">
								    <div class="form-group" style="margin-left:50px">
									    <label for="focusedinput" class="col-sm-2 control-label">Name: </label>
									    <div class="col-sm-8">
										    <input type="text" value="<?php echo $result["Name"]?>" class="form-control1" name="txtName" id="txtName" >
									    </div>
									
                                    </div>
                                <div class="form-group" style="margin-left:50px">
									<label for="focusedinput" class="col-sm-2 control-label">Phone: </label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $result["Phone"]?>" class="form-control1" name="txtPhone" id="txtPassword" placeholder="Default Input">
									</div>
									
								</div>
                                <div class="form-group" style="margin-left:50px">
									<label for="focusedinput" class="col-sm-2 control-label">Birthday: </label>
									<div class="col-sm-8">
										<input type="date" value="<?php echo $result["Birthday"]?>" class="form-control1" name="txtBirthday" id="txtPassword" placeholder="Default Input">
									</div>
									
								</div>
                                <div class="form-group" style="margin-left:50px">
									<label for="focusedinput" class="col-sm-2 control-label">Address: </label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $result["Address"]?>" class="form-control1" name="txtAddress" id="txtPassword" placeholder="Default Input">
									</div>
									
								</div>
                                                
								<input type="submit" style="margin-left:100px" value="Submit" name="btnEdit2" class="btn btn-default" class="col-sm-2 control-label" style="background-color:#F2B33F">			
							</div>
                            </form>
						</div>
					</div>
			</div>
		</div>
		