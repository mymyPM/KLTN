<?php
include_once("DataProvider.php");
class Scientific{
    private $da;
    public function __construct(){
        $this->da = new DataProvider();
    }
    function getScientific()
    {
        $sql = "SELECT * FROM scientific_research";
        return $this->da->FetchAll($sql);
    }
    function getgetScientificById($id)
    {
        $sql = "SELECT * FROM scientific_research WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
    function getgetScientificByName($class)
    {
        $sql = "SELECT ID FROM scientific_research WHERE Name='$class'";
        return $this->da->Fetch($sql); 
    }
    function addReach($id,$name,$class,$tyle)
    {
        $sql = "INSERT INTO reseach(LecturerID,Name_topic,Topic_classic,Tyle) VALUES ($id,'$name',$class,'$tyle')";
        return $this->da->ExecuteQuery($sql);
    }
    function getNameTopic($id)
    {
        $sql = "SELECT Name FROM scientific_research sr JOIN reseach r ON sr.ID=r.Topic_classic WHERE Topic_classic=$id";
        return $this->da->ExecuteQuery($sql);
    }
    function getListReseach()
    {
        $sql = "SELECT u.Name as Name1 ,sr.Name as Name2 ,r.Name_topic as Name3 ,sr.Time, cast(((r.Tyle/100)*sr.Time) as DECIMAL(9,1))  as Donggop FROM scientific_research sr JOIN reseach r ON sr.ID=r.Topic_classic JOIN user u
        ON r.LecturerID=u.ID ";
        return $this->da->FetchAll($sql);;
    }
    function getList()
    {
        $sql = "SELECT * FROM reseach";
        return $this->da->FetchAll();
    }
    function addScientific($loai,$time,$proof,$money)
    {
        $sql = "INSERT INTO scientific_research(Name,Time,Expense,Proof) VALUES ('$loai','$time','$money','$proof')";
        return $this->da->ExecuteQuery($sql);
    }
    function getReport($id)
    {
        $sql = "SELECT sr.Name as Name1,cast(((r.Tyle/100)*sr.Time) as DECIMAL(9,1))  as Donggop FROM reseach r JOIN scientific_research sr ON r.Topic_classic=sr.ID WHERE LecturerID=$id";
        return $this->da->FetchAll($sql);
    }
}
?>