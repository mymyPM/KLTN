<?php 
include_once("DataProvider.php");
class Users{
    private $da;
    public function __construct(){
        $this->da = new DataProvider();
    }
    function Login($username,$password)
    {
        $sql = "SELECT * FROM admin WHERE Username='".$username."' AND Password = md5('".$password."')";
        return $this->da->Fetch($sql);
    }
    function CreateUser($fullname,$username,$password,$email,$sdt)
    {
        $sql = "INSERT INTO user(groupID,fullname,username,password,email,sdt) 
                VALUES (3,'$fullname','$username',md5('$password'),'$email','$sdt')";
        return $this->da->ExecuteQuery($sql);
    }

}
