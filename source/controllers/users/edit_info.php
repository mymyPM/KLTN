<?php
include_once("source/views/users/edit_info.php");

if(isset($_POST["btnEdit"]))
{
    $name=$_POST["txtName"];
    $img=$_POST["txtImg"];
    $phone=$_POST["txtPhone"];
    $birthday = $_POST["txtBirthday"];
    $address = $_POST["txtAddress"];
    $id = $_GET["id"];
    include_once("source/models/users.php");
    $user = new Users;
    $result=$user->updateInfomation($id,$name,$phone,$address,$birthday,$img);

    if($result)
    {
        echo"<script>alert('Sửa thông tin thành công')</script>";
        //header("Refresh:0");
        header("location:admin.php?mod=lecturer&act=manage");
    }
    else
    echo"<script>alert('Sửa thông tin không thành công')</script>";
}
?>