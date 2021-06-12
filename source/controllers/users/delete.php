<?php
include_once("source/models/users.php");
$id=$_GET["id"];
$user_id = $_SESSION["userID"];
$user=new Users();

if($user_id==$id)
{
    echo"<script>alert('Không thể xóa account của chính mình')</script>";
    //header("location:admin.php?mod=users&act=account")
}
else
{
    $result = $user->deleteAccount($id,$user_id);
    if($result)
    {
        echo"<script>alert('Xóa account thành công')</script>";
    }
    else
    echo"<script>alert('Xóa account không thành công')</script>";
}



?>