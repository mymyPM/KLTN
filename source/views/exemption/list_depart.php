				<!-- main content start-->
                <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">Quản lý đơn vị
                    <div style="float:right">
                    <a href="admin.php?mod=exemption&act=add_depart"><i class="fa fa-user-plus" aria-hidden="true">Thêm đơn vị mới</i></a>
                    </div>
                    </h2>
                    
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Danh sách đơn vị:</h4>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>STT</th> 
                                    <th>Khoa</th> 
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
                                        echo $row["Name2"];
                                        echo "</td>"; 
                                        echo "<td>
                                        <a href='admin.php?mod=exemption&act=edit_depart&id=$row[ID]'><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>
                                        <a  href='admin.php?mod=exemption&act=delete_depart&id=$row[ID]'><i class=\"fa fa-trash\" aria-hidden=\"true\" style=\"margin-left:10px\"></i></a>
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