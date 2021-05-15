				<!-- main content start-->
                <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">Thiết lập định mức
                    <div style="float:right">
                    <a href="admin.php?mod=request&act=add_quota"><i class="fa fa-user-plus" aria-hidden="true">Thêm định mức mới</i></a>
                    </div>
                    </h2>
                    
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Danh sách định mức:</h4>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>STT</th> 
                                    <th>Năm</th> 
                                    <th>Số giờ</th> 
                                    <th>Action</th>
                                    
                                </tr> 
                            </thead> 
                            <tbody>

                                <?php
                                    foreach($result as $key => $row)
                                    {
                                            
                                        echo "<tr>"; 
                                        echo "<th scope=\"row\">";
                                        echo $key+1;
                                        echo "</th>"; 
                                        echo "<td>";
                                        echo $row["Year"];
                                        echo "</td>"; 
                                        echo "<td>";
                                        echo $row["Time_quota"];
                                        echo "</td>"; 
                                        echo "<td>
                                        <a href='#'><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>
                                        <a  href='#'><i class=\"fa fa-trash\" aria-hidden=\"true\" style=\"margin-left:10px\"></i></a>
                                    </td>"; 
                                        echo "</tr>";
                                    }
                                ?>

                            </tbody> 
                        </table>
					</div>
					
				</div>
			</div>
		</div>