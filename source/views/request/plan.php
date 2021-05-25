				<!-- main content start-->
                <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">Thiết lập đợt xét
                    <div style="float:right">
                    <a href="admin.php?mod=request&act=add_plan"><i class="fa fa-user-plus" aria-hidden="true">Thêm đợt xét mới</i></a>
                    </div>
                    </h2>
                    
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Danh sách đợt xét:</h4>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>STT</th> 
                                    <th>Tên đợt</th> 
                                    <th>Mô tả</th>
                                    <th>Năm</th>
                                    <th>Lần xét</th>
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
                                        echo $row["Description"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Year"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Times"];
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