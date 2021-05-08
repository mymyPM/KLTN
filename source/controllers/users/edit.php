<?php
include_once("source/views/users/edit.php");
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
}
if(isset($_POST["btnEdit"]))
{
    $name=$_POST["txtName"];
    $username=$_POST["txtEmail"];
    $password=$_POST["txtPassword"];
    $img=$_POST["txtImg"];
    $authorization=$_POST["txtAuthor"];    
    if($authorization==="Admin")
    {
        $g=1;
    }
    else
    {
        $g=2;
    }
    echo var_dump($id,$g,$name,$username,$password,$img);
    include_once("source/models/users.php");
    $user = new Users;
    $result=$user->updateUser($id,$g,$name,$username,$password,$img);
    if($result)
    echo"<script>alert('Sửa account thành công')</script>";
    else
    echo"<script>alert('Sửa account không thành công')</script>";
}
?>