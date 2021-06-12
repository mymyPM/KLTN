				<!-- main content start-->
                <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">Thiết lập đợt xét
                    <div style="float:right">
                    <script language="JavaScript" type="text/javascript">
                    function checkPlan(){
                    return alert('Đang diễn ra 1 đợt xét khác');
                    }
                    </script> 
                    <?php
                    include_once("source/models/plan.php");
                    $plan = new Plan;
                    $m = $plan->contraintPlan(); 
                    if(isset($m["Status"]))
                    {
                        echo "<a href=\"admin.php?mod=request&act=plan\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\" onclick=\"return checkPlan()\">Thêm đợt xét mới</i></a> ";
                    }
                    else
                        echo "<a href=\"admin.php?mod=request&act=add_plan\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\" >Thêm đợt xét mới</i></a> ";
                    ?>                    
                    </div>
                    </h2>
                    
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Danh sách đợt xét:</h4>
                        <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script> 
<script language="JavaScript" type="text/javascript">
function checkFinish(){
    return confirm('Are you sure?');
}
</script> 
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>STT</th> 
                                    <th>Tên đợt</th> 
                                    <th>Mô tả</th>
                                    <th>Năm</th>
                                    <th>Lần xét</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Status</th>
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
                                        echo "<td>";
                                        echo $row["Start"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["End"];
                                        echo "</td>";
                                        if($row["Status"]==0)
                                        {
                                            echo "<td>Đang xét</td>";
                                        }
                                        else
                                        {
                                            echo "<td>Đã kết thúc</td>";
                                        }
                                        
                                        echo "<td>
                                        <a href=\"admin.php?mod=request&act=edit_plan&id=$row[ID]\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>
                                        <a  href=\"admin.php?mod=request&act=delete_plan&id=$row[ID]\" onclick=\"return checkDelete()\"><i class=\"fa fa-trash\" aria-hidden=\"true\" style=\"margin-left:10px\"></i></a>
                                        <a href=\"admin.php?mod=request&act=finish_plan&id=$row[ID]\" onclick=\"return checkFinish()\"><i class=\"fa fa-flag-checkered\" aria-hidden=\"true\" style=\"margin-left:10px\"></i></a>
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