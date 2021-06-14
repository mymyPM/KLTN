
<?php
//error_reporting(0);
include_once("source/models/scientific_research.php");
//include_once("source/views/request/backend-search.php");
$exemption = new Scientific();
$ds = $exemption->getScientific();

?>

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <div class="row">
						<h3 class="title1">Kê khai nghiên cứu khoa học :
                            <div style="float:right"><a href="pesonal.php?mod=lecturer&act=reseach"></a></div>
                        </h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="pesonal.php?mod=lecturer&act=reseach" method="post">
							<div class="form-group">	
									<label for="selector1" class="col-sm-2 control-label">Tên đề tài:</label>	
										<div class="col-sm-8 ">
										<input type="text" class="form-control1" name="txtNameTopic" placeholder="" value="">
										</div>
									</div>
								<div class="form-group">	
									<label for="selector1" class="col-sm-2 control-label">Tỷ lệ hoàn thành:</label>	
										<div class="col-sm-8 ">
										<input type="text" class="form-control1" name="txtTyle" placeholder="" value="">
										</div>
								</div>
								<div class="form-group">
								
									<label for="selector1" class="col-sm-2 control-label">Loại đề tài:</label>	
										<div class="col-sm-8 ">
									
									<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box select').on("keyup input", function(){
        /* Lấy giá trị đầu vào khi có thay đổi */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("source/views/reseach/backend_reseach.php", {term: inputVal}).done(function(data){
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
									<option selected disabled hidden value="">Chọn loại đề tài</option>
									<?php
									foreach($ds as $row )
									{
										$id = $row["Name_scien"];
            							echo "<option value='$id'>";
            							echo $row['Name_scien'];
            							echo "</option>";					
									}																
									?>
									</select>
									
									<div class="result" id="a" style="margin-top:10px;">
										<input type="text" class="form-control1" id="focusedinput" placeholder="" value="">
										
									</div>									
													
								</div>
                    
								</div>
									
								</div>
								
								
								
                                
								
								
                                <input type="submit" value="Submit" name="btnSave" class="btn btn-default" class="col-sm-2 control-label">								
							</form>
						</div>
					</div>
			</div>
		</div>
		