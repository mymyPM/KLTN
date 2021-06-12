				<!-- main content start-->
                <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">My report
                    <div style="float:right">
                    <a href=""><i class="fa fa-download"></i></a>
                    </div>
                    </h2>
                
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>List report:</h4>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>ID</th> 
                                    <th>Reason</th> 
                                    <th>Reduction_time</th>
                                    <th>Status</th> 
                                    <th>Start</th>
                                    <th>End</th>
                                    
                                    
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
                                    echo $row["Reason"];
                                    echo "</td>"; 
                                    echo "<td>";
                                    echo $row["Reduction_time"];
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
                                        echo $row["Start"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["End"];
                                        echo "</td>";
                                    
                                        
                            
                                    
                                echo "</tr>"; 
                            } 
                            
                            ?>    
                            </tbody> 
                        </table>
                        
                        <div>Tổng thời gian miễn giảm: <?php echo $tongthoigian?></div>
					</div>
					
				</div>
			</div>
		</div>
		