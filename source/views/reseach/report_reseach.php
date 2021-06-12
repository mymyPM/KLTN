				<!-- main content start-->
                <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">My report
                    <div style="float:right">
                    <a href="admin.php?mod=users&act=add_account"><i class="fa fa-download"></i></a>
                    </div>
                    </h2>
                
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>List report:</h4>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>ID</th> 
                                    <th>Loại đề tài</th> 
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
                                    echo $row["Name1"];
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
		