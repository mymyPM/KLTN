<?php 
if(isset($_SESSION["userID"]))
{
    unset($_SESSION["username"]);
    unset($_SESSION["userID"]);
    unset($_SESSION["GroupID"]);
    
    header("location:index.php");
}
