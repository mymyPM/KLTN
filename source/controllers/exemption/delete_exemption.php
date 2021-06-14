<?php
include_once("source/models/exemption.php");
$id=$_GET["id"];
$user=new Exemption();
$result = $user->deleteExemp($id);
if($result)
    {
        echo"<script>alert('Xóa loại thành công')</script>";
        header("location:admin.php?mod=exemption&act=list_exemption");
    }
    else
    echo"<script>alert('Xóa loại không thành công')</script>";


?>