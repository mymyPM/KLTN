
<?php
include_once("source/models/exemption.php");
$exemption = new Exemption();
$ds = $exemption->getExemption();

?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <div class="row">
						<h3 class="title1">Kê khai miễn giảm:
                            <div style="float:right" hidden><a href="pesonal.php?mod=request&act=exemption&id=<?php echo $row["ID"]; ?>"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></div>
                        </h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="pesonal.php?mod=request&act=exemption&id=<?php echo $id?>" method="post">
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Loại miễn giảm:</label>
									<div class="col-sm-8">
									<select name="txtLoai" id="txtLoai" class="form-control1" >
									<?php
									foreach($ds as $row )
									{
										$id=$row["ID"];
										echo "<option value=\"$id\">";
										echo "<a href=\"admin.php\">"	;				
										echo $row["Name"];
										echo "</a>";
										echo "</option>";					
									}
																
									?>
									</select></div>					
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Số giờ miễn giảm: </label>
									<div class="col-sm-8">
									<?php
									$name = $row["Name"];
									$m = $exemption->getExemptionByName($name);
									$n = settype($m,"integer");
									?>
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input" value="<?php echo $n  ?>">
									</div>
								</div>                                 
                                <input type="submit" value="Submit" name="btnExemption" class="btn btn-default" class="col-sm-2 control-label">
								
								
								
								
							</form>
						</div>
					</div>
			</div>
		</div>
		