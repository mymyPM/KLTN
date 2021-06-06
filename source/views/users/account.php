				<!-- main content start-->
                <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
                    <h2 class="title1">Quản lý tài khoản
                    <div style="float:right">
                    <a href="admin.php?mod=users&act=add_account"><i class="fa fa-user-plus" aria-hidden="true">Thêm tài khoản mới</i></a>
                    </div>
                    </h2>
                    <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script> 

                    
					
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Danh sách tài khoản:</h4>
						<table class="table table-hover"> 
                            <thead> 
                                <tr> 
                                    <th>ID</th> 
                                    <th>Name</th> 
                                    <th>Username</th> 
                                    <th>Password</th>
                                    <th>Authorization</th>
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
                                <a href=\"admin.php?mod=users&act=delete&id=$row[ID]\" onclick=\"return checkDelete()\"><i class=\"fa fa-trash\" aria-hidden=\"true\" style=\"margin-left:10px\"></i></a>
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
        <?php
  if($findPage>1){
    echo "<div><center>".Pages::PreNext($_GET['page'],"?mod=users&act=account&",$findPage)."</center></div>";
  }
?>		