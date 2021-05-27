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
                                    <th>ID</th> 
                                    <th>LecturerName</th> 
                                    <th>Reason</th> 
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Status</th>
                                    
                                </tr> 
                            </thead> 
                            <tbody> 
                                <tr> 
                                    <th scope="row">1</th> 
                                    <td>Mark</td> <td>Otto</td> 
                                    <td>@mdo</td> 
                                    <td>@mdo</td>
                                    <td>
                                        <a><i class="fa fa-check" aria-hidden="true"></i></a>
                                        <a><i class="fa fa-times" aria-hidden="true"></i></i></a>
                                    </td> 
                                </tr> 
                                <tr> 
                                    <th scope="row">2</th> 
                                    <td>Jacob</td> 
                                    <td>Thornton</td> 
                                    <td>@fat</td> 
                                </tr> 
                                <tr> 
                                    <th scope="row">3</th> 
                                    <td>Larry</td> 
                                    <td>the Bird</td> 
                                    <td>@twitter</td> 
                                </tr>
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
                                echo $row["Username"];
                                echo "</td>"; 
                                echo "<td>";
                                echo $row["Password"];
                                echo "</td>"; 
                                echo "<td>";
                                echo $row["GroupName"];
                                echo "</td>";
                                echo "<td>
                                <a href=\"admin.php?mod=users&act=edit&id=$row[ID]\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>
                                <a href=\"admin.php?mod=users&act=delete&id=$row[ID]\" onclick=\"confirm(\"Are you sure?\")\"><i class=\"fa fa-trash\" aria-hidden=\"true\" style=\"margin-left:10px\"></i></a>
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
		