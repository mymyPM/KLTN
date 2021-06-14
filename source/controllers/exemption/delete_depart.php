<?php
include_once("source/models/department.php");
$id=$_GET["id"];
$user=new Department();
$result = $user->deleteDepart($id);
if($result)
    {
        echo"<script>alert('Xóa thành công')</script>";
        header("location:admin.php?mod=exemption&act=list_depart");
    }
    else
    echo"<script>alert('Xóa không thành công')</script>";


?>