				<!-- main content start-->
                <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">Phê duyệt hoạt động nghiên cứu khoa học
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
                                    <th>Thời gian hoạt động NCKH</th>
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
                                        echo $row["Name_scien"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Name_topic"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Time"];
                                        echo "</td>";
                                        echo "<td>
                                        <a href='admin.php?mod=lecturer&act=approve_research&id=$row[ID]'><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
                                        <a href='admin.php?mod=lecturer&act=reject_research&id=$row[ID]'><i class=\"fa fa-times\" aria-hidden=\"true\" style=\"margin-left:10px\"></i></a>
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
		