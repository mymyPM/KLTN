				<!-- main content start-->
                <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">Quản lý account
                    <div style="float:right">
                    <a href="admin.php?mod=users&act=add_account"><i class="fa fa-user-plus" aria-hidden="true">Add new account</i></a>
                    </div>
                    </h2>
                    

                    
					
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Danh sách account:</h4>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>ID</th> 
                                    <th>Name</th> 
                                    <th>Username</th> 
                                    <th>Password</th>
                                    <th>Phân quyền</th>
                                    <th>Thao tác</th>
                                    
                                </tr> 
                            </thead> 
                            <tbody>
                            <?php
                            foreach($result as $row)
                            {
                                echo "<tr>"; 
                                echo "<th scope=\"row\">";
                                echo $row["ID"];
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
                                echo $row["Name"];
                                echo "</td>";
                                echo "<td>
                                <a><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>
                                <a><i class=\"fa fa-trash\" aria-hidden=\"true\" style=\"margin-left:10px\"></i></a>
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
		