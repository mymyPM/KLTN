<?php
include_once("source/models/quota.php");
$id=$_GET["id"];
$user=new Quota();
$result = $user->deleteQuota($id);
if($result)
    {
        echo"<script>alert('Xóa định mức thành công')</script>";
        header("location:admin.php?mod=request&act=quota");
    }
    else
    echo"<script>alert('Xóa định mức không thành công')</script>";


?>