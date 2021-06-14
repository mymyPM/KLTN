				<!-- main content start-->
                <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">Quản lý hoạt động nghiên cứu khoa học</h2>
                    

                    
					
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Danh sách hoạt động NCKH:</h4>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>STT</th> 
                                    <th>Tên Giảng Viên</th> 
                                    <th>Tên đề tài</th>
                                    <th>Loại đề tài</th>
                                    <th>Thời gian hoạt động NCKH</th>
                                    <th>Số giờ đóng góp</th>
                                    <th>Status</th>
                                    
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
                                        echo $row["Name_topic"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Name_scien"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Time"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Donggop"];
                                        echo "</td>";
                                        echo "</td>";
                                            if($row["Status"]==1)
                                            {
                                                echo "<td>Chấp nhận</td>";
                                            }
                                            else
                                                if($row["Status"]==2)
                                                {
                                                    echo "<td>Từ chối</td>";
                                                }
                                                else
                                                if($row["Status"]==0)
                                                {
                                                    echo "<td>Chưa duyệt</td>";
                                                }
                                        echo "<td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody> 
                        </table>
					</div>
					
				</div>
			</div>
		</div>