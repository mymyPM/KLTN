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
        return $this->da->Fetch($sql);
    }
    function getgetScientificByName($class)
    {
        $sql = "SELECT ID,Time FROM scientific_research WHERE Name_scien='$class'";
        return $this->da->Fetch($sql); 
    }
/*
    function addReach($id,$name,$class,$tyle)
    {
        $sql = "INSERT INTO reseach(LecturerID,Name_topic,Topic_classic,Tyle,Status) VALUES ($id,'$name',$class,'$tyle',0)";
        return $this->da->ExecuteQuery($sql);
    }
*/
    function getQuota()
    {
        $sql = "SELECT * FROM quota WHERE Year=YEAR(GETDATE())";
        return $this->da->Fetch($sql);
    }
    function addReach($id,$name,$class,$tyle,$time_reseach,$quota_id)
    {
        $sql = "INSERT INTO reseach(LecturerID,Name_topic,Time_reseach,Topic_classic,Tyle,Status,Quota_id) VALUES ($id,'$name',$time_reseach,$class,'$tyle',0,$quota_id)";
        return $this->da->ExecuteQuery($sql);
    }
    function getNameTopic($id)
    {
        $sql = "SELECT Name FROM scientific_research sr JOIN reseach r ON sr.ID=r.Topic_classic WHERE Topic_classic=$id";
        return $this->da->ExecuteQuery($sql);
    }
    function getListReseach()
    {
        $sql = "SELECT r.ID, u.Name, Name_scien, Name_topic, sr.Time FROM scientific_research sr JOIN reseach r ON sr.ID=r.Topic_classic JOIN user u
        ON r.LecturerID=u.ID
        WHERE r.Status=0";
        return $this->da->FetchAll($sql);
    }
    function getList()
    {
        $sql = "SELECT * FROM reseach";
        return $this->da->FetchAll();
    }
    function addScientific($loai,$time,$proof,$money)
    {
        $sql = "INSERT INTO scientific_research(Name_scien,Time,Expense,Proof) VALUES ('$loai','$time','$money','$proof')";
        return $this->da->ExecuteQuery($sql);
    }
    function getReport($id)
    {
        $sql = "SELECT sr.Name_scien as Name1,cast(((r.Tyle/100)*sr.Time) as DECIMAL(9,0))  as Donggop, r.Status FROM reseach r JOIN scientific_research sr ON r.Topic_classic=sr.ID WHERE LecturerID=$id";
        return $this->da->FetchAll($sql);
    }
    function approveResearch($id,$admin)
    {
        $sql = "UPDATE reseach SET Status=1,AdminID=$admin WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
    function rejectResearch($id,$admin)
    {
        $sql = "UPDATE reseach SET Status=2,AdminID=$admin WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
    function listResearch()
    {
        $sql = "SELECT r.ID, u.Name, Name_scien, Name_topic, sr.Time, r.Status, cast(((r.Tyle/100)*sr.Time) as DECIMAL(9,0)) as Donggop FROM scientific_research sr JOIN reseach r ON sr.ID=r.Topic_classic JOIN user u
        ON r.LecturerID=u.ID";
        return $this->da->FetchAll($sql);
    }
    /*
    function sumTime($id)
    {
        $sql = "SELECT SUM(cast(((r.Tyle/100)*sr.Time) as DECIMAL(9,0))) as tongtg
        FROM scientific_research sr JOIN reseach r ON sr.ID=r.Topic_classic
        WHERE  r.LecturerID=$id AND r.Status=1";
        return $this->da->Fetch($sql);
    }
    */
    function sumTime($id)
    {
        $sql = "SELECT SUM(cast(((r.Tyle/100)*sr.Time) as DECIMAL(9,0))) as tongtg
        FROM scientific_research sr JOIN reseach r ON sr.ID=r.Topic_classic
        WHERE  r.LecturerID=$id AND r.Status=1";
        return $this->da->Fetch($sql);
    }
    function updateTime($id)
    {
        $sql = "INSERT INTO (Time_reseach) SELECT (SUM(cast(((r.Tyle/100)*sr.Time) as DECIMAL(9,0))))
        FROM scientific_research sr JOIN reseach r ON sr.ID=r.Topic_classic
        WHERE  r.LecturerID=$id";
        return $this->da->ExecuteQuery($sql);
    }
    function getStatus()
    {
        $sql = "SELECT Status, COUNT(Status) AS count_status FROM reseach WHERE Status=0";
        return $this->da->Fetch($sql);
    }
    function countAccount()
    {
        $sql = "SELECT ID FROM scientific_research";
        return $this->da->NumRows($sql);
    }
    function updateScien($id,$loai,$time,$proof,$money)
    {
        $sql = "UPDATE scientific_research SET Name_scien='$loai',Time='$time',Expense='$money',Proof='$proof' WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
    function deleteScien($id)
    {
        $sql = "DELETE FROM scientific_research WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }

}
?>