				<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Quản lý thành viên</h2>
					
					
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Danh sách thành viên:</h4>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>ID</th> 
                                    <th>Name</th> 
                                    <th>Birthday</th> 
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Classify</th> 
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
                                echo $row["Birthday"];
                                echo "</td>"; 
                                echo "<td>";
                                echo $row["Phone"];
                                echo "</td>"; 
                                echo "<td>";
                                echo $row["Email"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["classifyName"];
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
		