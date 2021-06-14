				<!-- main content start-->
                <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">Quản lý loại miễn giảm
                    <div style="float:right">
                    <a href="admin.php?mod=exemption&act=add_exemption"><i class="fa fa-user-plus" aria-hidden="true">Thêm loại miễn giảm mới</i></a>
                    </div>
                    </h2>
                    
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Danh sách loại miễn giảm:</h4>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>STT</th> 
                                    <th>Tên</th> 
                                    
                                    <th>Công thức</th>
                                    <th>Start</th>
                                    <th>End</th>
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
                                        echo $row["Formula"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Start"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["End"];
                                        echo "</td>"; 
                                        echo "<td>
                                        <a href='admin.php?mod=exemption&act=edit_exemption&id=$row[ID]'><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>
                                        <a  href='admin.php?mod=exemption&act=delete_exemption&id=$row[ID]'><i class=\"fa fa-trash\" aria-hidden=\"true\" style=\"margin-left:10px\"></i></a>
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