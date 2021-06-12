<?php 
include_once("source/views/users/login.php");
if(isset($_POST["btnLogin"]))
{
    $username = $_POST["txtusername"];
    $password = $_POST["txtpassword"];
    //echo var_dump($username,$password);
    if($username!="" && $password!="")
    {
        include_once("source/models/users.php");
        $user = new Users();
        $result = $user->Login($username,$password);
        echo var_dump($result);
        if($result)
        {
            $_SESSION["username"]=$username;
            $_SESSION["userID"]=$result["ID"];
            $_SESSION["GroupID"]=$result["GroupID"];
            $_SESSION["Name"]=$result["Name"];
            $_SESSION["Img"]=$result["Img"];           
            header("location:index.php");
        }
        else
            echo "<p>Tên đăng nhập hoặc mật khẩu không đúng</p>";
    }
    
}
