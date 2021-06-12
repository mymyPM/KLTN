<?php
include_once("source/models/users.php");
$user = new Users();
$id = $_SESSION["userID"];
$result = $user->getUserById($id);

include_once("source/views/users/profile.php");
if(isset($_POST["btnEdit2"]))
{
    $name=$_POST["txtName"];
    
    $phone=$_POST["txtPhone"];
    $birthday = $_POST["txtBirthday"];
    $address = $_POST["txtAddress"];
    $id = $_GET["id"];
    include_once("source/models/users.php");
    $user = new Users;
    $result=$user->updateInfomation($id,$name,$phone,$address,$birthday);

    if($result)
    {
        echo"<script>alert('Sửa thông tin thành công')</script>";
        //header("Refresh:0");
        header("location:pesonal.php?mod=users&act=profile");
    }
    else
    echo"<script>alert('Sửa thông tin không thành công')</script>";
}


?>