<?php 
		$con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Khong ket noi duoc csdl');
			exit();
		}
		else
		{
            mysqli_select_db($con,"ql_nckh");
			mysqli_query($con,"SET NAME UTF8");
			echo "Connected...";
			return $con;
		}
   
?>