<?php
include_once("source/views/users/edit.php");

if(isset($_POST["btnEdit"]))
{
    $name=$_POST["txtName"];
    $username=$_POST["txtEmail"];
    $password=$_POST["txtPassword"];
    $img=$_POST["txtImg"];
    $authorization=$_POST["txtAuthor"];  
    echo var_dump($authorization);
    $id = $_GET["id"];  
    if($authorization=="1")
    {
        $g=1;
    }
    else
    {
        $g=2;
    }
    echo var_dump($g,$name);
    include_once("source/models/users.php");
    $user = new Users;
    $result=$user->updateUser($id,$g,$name,$username,$password,$img);

    if($result)
    {
        echo"<script>alert('Sửa account thành công')</script>";
        //header("Refresh:0");
        header("location:admin.php?mod=users&act=account");
    }
    else
    echo"<script>alert('Sửa account không thành công')</script>";
}
?>