<?php
include_once("source/models/plan.php");
$id=$_GET["id"];
$user=new Plan();
$result = $user->deletePlan($id);
if($result)
    {
        echo"<script>alert('Xóa đợt xét thành công')</script>";
        header("location:admin.php?mod=request&act=plan");
    }
    else
    echo"<script>alert('Xóa đợt xét không thành công')</script>";
?>