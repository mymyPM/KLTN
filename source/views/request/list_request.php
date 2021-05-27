				<!-- main content start-->
                <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">Quản lý yêu cầu xin miễn giảm</h2>
                    

                    
					
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Danh sách yêu cầu:</h4>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>STT</th> 
                                    <th>Tên Giảng Viên</th> 
                                    <th>Loại miễn giảm</th> 
                                    <th>Số giờ được giảm</th>
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
                                        echo $row["Name"];
                                        echo "</td>"; 
                                        echo "<td>";
                                        echo $row["Reason"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Reduction_time"];
                                        echo "</td>";
                                        echo "<td>
                                        <a href='#'><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                        <a  href='#'><i class=\"fa fa-times\" aria-hidden=\"true\" style=\"margin-left:10px\"></i></a>
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
		