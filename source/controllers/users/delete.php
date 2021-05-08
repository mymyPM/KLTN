<?php
include_once("source/models/users.php");
$id=$_GET["id"];
$user=new Users();
$result = $user->deleteAccount($id);
if($result)
    {
        echo"<script>alert('Xóa account thành công')</script>";
    }
    else
    echo"<script>alert('Xóa account không thành công')</script>";


?>