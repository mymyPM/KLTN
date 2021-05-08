<?php
include_once("source/views/users/add_account.php");
if(isset($_POST["btnRegister"]))
{
    $name = $_POST["txtName"];
    $email = $_POST["txtEmail"];
    $group = $_POST["Group"];
    echo var_dump($group);
    $pass = $_POST["txtPassword"];
    $img = $_POST["txtImg"];
    if($group==="Admin")
    {
        $g=1;
    }
    else
    {
        $g=2;
    }
    include_once("source/models/users.php");
    $user = new Users;
    $result = $user->createUser($name,$email,$g,$pass,$img);
    if($result)
    echo"<script>alert('Thêm account thành công')</script>";

    else
    echo"<script>alert('Thêm account không thành công')</script>";
}

?>