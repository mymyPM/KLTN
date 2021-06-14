<?php
include_once("source/models/classify.php");
$id=$_GET["id"];
$user=new Classify();
$result = $user->deleteClass($id);
if($result)
    {
        echo"<script>alert('Xóa thành công')</script>";
        header("location:admin.php?mod=exemption&act=list_class");
    }
    else
    echo"<script>alert('Xóa không thành công')</script>";


?>