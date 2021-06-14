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
    function createUser($name1,$email,$g,$pass,$class,$depart)
    {
        $sql = "INSERT INTO user(GroupID,`Name`,Username,`Password`,Img,Classify_id,Department_id) 
                VALUES ($g,'$name1','$email',md5('$pass'),'upload/account.png',$class,$depart)";
        return $this->da->ExecuteQuery($sql);
    }
    function getUser($start,$end)
    {
        $sql = "SELECT user.ID,`Name`,Username,`Password`,GroupName,Birthday,Phone,Address,Classify_id,Department_id 
                FROM user JOIN groups ON user.GroupID=groups.ID 
                WHERE GroupID=groups.ID
                limit $start,$end";
        return $this->da->FetchAll($sql);
    }
    function getClassifyById($id)
    {
        $sql = "SELECT Name as Name1 FROM classify WHERE ID=$id";
        return $this->da->Fetch($sql);
    }
    function getDepartmentById($id)
    {
        $sql = "SELECT Name as Name2 FROM department WHERE ID=$id";
        return $this->da->Fetch($sql);
    }
    function getUserFull()
    {
        $sql = "SELECT u.ID,Name, ClassName, DepartName, Birthday, Address, Phone
            FROM department d JOIN user u ON d.ID=u.Department_id JOIN classify c ON u.Classify_id=c.ID";
        return $this->da->FetchAll($sql);
    }
    function getUserByName($name)
    {
        $sql = "SELECT * FROM user WHERE `Name` like '%$name%'";
        return $this->da->FetchAll($sql);
    }
    function getUserById($id)
    {
        $sql = "SELECT Name,Phone,Birthday,Address,Img FROM user WHERE ID=$id";
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
    function updateUser($id,$g,$name,$username,$password)
    {
        $sql = "UPDATE user SET GroupID=$g,Name='$name',Username='$username',Password='$password'
                WHERE ID=$id ";
        return $this->da->ExecuteQuery($sql);
    }
    function deleteAccount($id,$user_id)
    {
        $sql = "DELETE FROM user WHERE (ID=$id) AND ID!=$user_id ";
        return $this->da->ExecuteQuery($sql);
    }
    function updateInfomation($id,$name,$phone,$address,$birthday)
    {
        $sql = "UPDATE user SET Name='$name',Phone='$phone',Birthday='$birthday',Address='$address'
                WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
    function updateImg($id,$img)
    {
        $sql = "UPDATE user SET Img='$img' WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }

    function getClassify()
    {
        $sql = "SELECT ID ,ClassName as Name1 FROM classify";
        return $this->da->FetchAll($sql);
    }
    function getDepartment()
    {
        $sql = "SELECT ID,DepartName as Name2 FROM department";
        return $this->da->FetchAll($sql);
    }
}
