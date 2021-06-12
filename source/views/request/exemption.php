
<?php
//error_reporting(0);
include_once("source/models/exemption.php");
//include_once("source/views/request/backend-search.php");
$exemption = new Exemption();
$ds = $exemption->getExemption();

?>

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <div class="row">
						<h3 class="title1">Kê khai miễn giảm :
                            <div style="float:right"><a href="pesonal.php?mod=request&act=exemption"></a></div>
                        </h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="pesonal.php?mod=request&act=exemption" method="post">
							
								<div class="form-group">
								
									<label for="selector1" class="col-sm-2 control-label">Loại miễn giảm:</label>	
										<div class="col-sm-8 ">
									
									<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box select').on("keyup input", function(){
        /* Lấy giá trị đầu vào khi có thay đổi */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("source/views/request/backend-search.php", {term: inputVal}).done(function(data){
                // Hiển thị dữ liệu trả về trong trình duyệt
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Thiết lập giá trị đầu vào khi click vào result
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('select').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
								<div class=search-box>
									<select name="txtLoai" id="txtLoai" class="form-control1" >
									<option selected disabled hidden value="">Chọn loại miễn giảm</option>
									<?php
									foreach($ds as $row )
									{
										$id = $row["Reason"];
            							echo "<option value='$id'>";
            							echo $row['Reason'];
            							echo "</option>";					
									}																
									?>
									</select>
									
									<div class="result" id="a" style="margin-top:10px;">
										<input type="text" class="form-control1" id="focusedinput" placeholder="" value="">
										<input type="text" style="margin-top:10px" class="form-control1" id="txtStart" placeholder="" value="">
										<input type="text" style="margin-top:10px" class="form-control1" id="txtEnd" placeholder="" value="">
									</div>	
									
													
								</div>
                    
								</div>
									
								</div>
							
								
								
								
                                
								
								
                                <input type="submit" value="Submit" name="btnExemption" class="btn btn-default" class="col-sm-2 control-label">								
							</form>
						</div>
					</div>
			</div>
		</div>
		