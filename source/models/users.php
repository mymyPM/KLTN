<?php 
include_once("DataProvider.php");
class Users{
    private $da;
    public function __construct(){
        $this->da = new DataProvider();
    }
    function Login($username,$password)
    {
        $sql = "SELECT * FROM user WHERE Username='".$username."' AND `Password` = md5('".$password."')";
        return $this->da->Fetch($sql);
    }
    function createUser($name,$email,$g,$pass,$img)
    {
        $sql = "INSERT INTO user(GroupID,`Name`,Username,`Password`,Img) 
                VALUES ($g,'$name','$email',md5('$pass'),'$img')";
        return $this->da->ExecuteQuery($sql);
    }
    function getUser($start,$end)
    {
        $sql = "SELECT user.ID,`Name`,Username,`Password`,GroupName 
                FROM user JOIN groups ON user.GroupID=groups.ID 
                WHERE GroupID=groups.ID
                limit $start,$end";
        return $this->da->FetchAll($sql);
    }
    function getUserByName($name)
    {
        $sql = "SELECT * FROM user WHERE `Name` like '%$name%'";
        return $this->da->FetchAll($sql);
    }
    function getUserById($id)
    {
        $sql = "SELECT * FROM user WHERE ID=$id";
        return $this->da->Fetch($sql);
    }
    function countAccount()
    {
        $sql = "SELECT ID FROM user";
        return $this->da->NumRows($sql);
    }
    function getListLecturer()
    {
        $sql = "SELECT user.ID,user.Name,Birthday,Phone,Email,`Address` 
                FROM user";
        return $this->da->FetchAll($sql);
    }
    function updateUser($id,$g,$name,$username,$password,$img)
    {
        $sql = "UPDATE user SET GroupID=$g,Name='$name',Username='$username',Password='$password',Img='$img'
                WHERE ID=$id ";
        return $this->da->ExecuteQuery($sql);
    }
    function deleteAccount($id)
    {
        $sql = "DELETE FROM user WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
}
