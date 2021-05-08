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
    function createUser($name,$email,$g,$pass,$img)
    {
        $sql = "INSERT INTO admin(GroupID,Name,Username,Password,Img) 
                VALUES ($g,'$name','$email',md5('$pass'),'$img')";
        return $this->da->ExecuteQuery($sql);
    }
    function getUser($start,$end)
    {
        $sql = "SELECT admin.ID,Name,Username,Password,GroupName 
                FROM admin JOIN groups ON admin.GroupID=groups.ID 
                WHERE GroupID=groups.ID
                limit $start,$end";
        return $this->da->FetchAll($sql);
    }
    function getUserByName($name)
    {
        $sql = "SELECT * FROM admin WHERE Name like '%$name%'";
        return $this->da->FetchAll($sql);
    }
    function countAccount()
    {
        $sql = "SELECT ID FROM admin";
        return $this->da->NumRows($sql);
    }
    function getListLecturer()
    {
        $sql = "SELECT lecturers.ID,lecturers.Name,Birthday,Phone,Email,Address,classify.Name as classifyName 
                FROM lecturers JOIN classify
                WHERE lecturers.ClassifyID=classify.ID";
        return $this->da->FetchAll($sql);
    }
    function updateUser($id,$g,$name,$username,$password,$img)
    {
        $sql = "UPDATE admin SET GroupID=$g,Name=$name,Username=$username,Password=$password,Img=$img
                WHERE ID=$id ";
        return $this->da->ExecuteQuery($sql);
    }
    function deleteAccount($id)
    {
        $sql = "DELETE FROM admin WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
}
