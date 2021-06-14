<?php
include_once("source/models/scientific_research.php");
$id=$_GET["id"];
$user=new Scientific();
$result = $user->deleteScien($id);
if($result)
    {
        echo"<script>alert('Xóa định danh mục thành công')</script>";
        header("location:admin.php?mod=request&act=scientific");
    }
    else
    echo"<script>alert('Xóa danh mục không thành công')</script>";


?>