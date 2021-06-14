				<!-- main content start-->
                <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">Thống kê 
                    <div style="float:right">
                    <?php
                    //include_once("excel.php");
                    
                    ?>
                    <a href="excel.php"><i class="fas fa-file-export">Export File</i></a>
                    </div>
                    </h2>
                    
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>STT</th> 
                                    <th>Tên giảng viên</th>
                                    <th>Khoa</th>
                                    <th>Thời gian NCKH</th>
                                    <th>Kết quả</th>
                                    
                                    
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
                                        echo $row["DepartName"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Time1"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["ketqua"];
                                        echo "</td>";
                                        
                                        
                                    }
                                ?>

                            </tbody> 
                        </table>
					</div>
					
				</div>
			</div>
		</div>