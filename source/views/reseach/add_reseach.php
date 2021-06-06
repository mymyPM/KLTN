<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">KÊ KHAI HOẠT ĐỘNG NGHIÊN CỨU KHOA HỌC</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							
						</div>
						<div class="form-body">
							<form class="form-horizontal" action="pesonal.php?mod=lecturer&act=reseach" method="post" > 
                            <div class="form-group"> 
                            <label for="exampleInputEmail1">Loại đề tài</label>
                            <select name="txtLoai" id="txtLoai" class="form-control1" >
									<option selected disabled hidden value="">Chọn loại đề tài</option>
									<?php
									foreach($scienti as $row )
									{
										$id = $row["ID"];
            							echo "<option value='$id'>";
            							echo $row['Name'];
            							echo "</option>";					
									}																
									?>
									</select>
                            </div> 
                            <div class="form-group"> 
                                <label for="exampleInputPassword1">Tên đề tài</label> 
                                <input type="text" class="form-control" name="txtName" placeholder=""> 
                            </div> 
                            <div class="form-group"> 
                                <label for="exampleInputFile">Thời gian NCKH</label> 
                                <input type="text" class="form-control" name="txtTime" placeholder="">  
                            </div>  
                            <input type="submit" name="btnSave" value="Submit" class="btn btn-default">
                            </form> 
						</div>
					</div>
					
					
				</div>
			</div>
		</div>