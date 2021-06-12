				<!-- main content start-->
        <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">Quản lý hoạt động nghiên cứu khoa học
					<div style="float:right">
                    <a href="admin.php?mod=exemption&act=add_scientific"><i class="fa fa-user-plus" aria-hidden="true">Thêm danh mục hoạt động NCKH</i></a>
                    </div>
                    </h2>
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Danh sách:</h4>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>STT</th> 
                                    <th>Tên Giảng Viên</th> 
                                    <th>Loại đề tài</th> 
                                    <th>Tên đề tài</th>
                                    <th>Thời gian hoạt đông NCKH</th>
                                    <th>Thời gian đóng góp</th>                                    
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
                                        echo $row["Name1"];
                                        echo "</td>"; 
                                        echo "<td>";
                                        echo $row["Name2"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Name3"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Time"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Donggop"];
                                        echo "</td>";
                                        
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody> 
                        </table>
					</div>
					
				</div>
			</div>
		</div>
		