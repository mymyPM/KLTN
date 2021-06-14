				<!-- main content start-->
                <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">Danh mục hoạt động nghiên cứu khoa học
                    <div style="float:right">
                    <a href="admin.php?mod=exemption&act=add_scientific"><i class="fa fa-user-plus" aria-hidden="true">Thêm hoạt động NCKH mới</i></a>
                    </div>
                    </h2>
                    
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Danh sách hoạt động NCKH:</h4>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>STT</th> 
                                    <th>Loại đề tài</th> 
                                    <th>Số giờ</th>
                                    <th>Kinh phí</th>
                                    <th>Minh chứng</th>
                                    <th>Action</th>
                                    
                                </tr> 
                            </thead> 
                            <tbody>
                            <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script> 
                                <?php
                                    foreach($result as $key => $row)
                                    {
                                            
                                        echo "<tr>"; 
                                        echo "<th scope=\"row\">";
                                        echo $key+1;
                                        echo "</th>"; 
                                        echo "<td>";
                                        echo $row["Name_scien"];
                                        echo "</td>"; 
                                        echo "<td>";
                                        echo $row["Time"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Expense"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["Proof"];
                                        echo "</td>";
                                        echo "<td>
                                        <a href=\"admin.php?mod=exemption&act=edit_scientific&id=$row[ID]\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>
                                        <a  href=\"admin.php?mod=exemption&act=delete_scientific&id=$row[ID]\" onclick=\"return checkDelete()\"><i class=\"fa fa-trash\" aria-hidden=\"true\" style=\"margin-left:10px\"></i></a>
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