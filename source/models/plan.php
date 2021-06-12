<?php
include_once("DataProvider.php");
class Plan{
    private $da;
    public function __construct(){
        $this->da = new DataProvider();
    }
    
    function getPlan()
    {
        $sql = "SELECT ID, Name, Description, Year, `Times`,Start,End,Status
                FROM plan";
        return $this->da->FetchAll($sql);
    }

    function countAccount()
    {
        $sql = "SELECT ID FROM plan";
        return $this->da->NumRows($sql);
    }
    function createPlan($name,$desc,$year,$time,$start,$end)
    {
        $sql = "INSERT INTO plan(Name,Description,Year,Times,Start,End,Status)
                VALUES ('$name','$desc',$year,$time,'$start','$end',0)";
        return $this->da->ExecuteQuery($sql);
    }
    function getPlanById($id)
    {
        $sql = "SELECT * FROM plan WHERE ID=$id";
        return $this->da->Fetch($sql);
    }
    function updatePlan($name,$desc,$year,$time,$id,$start,$end)
    {
        $sql = "UPDATE plan SET Name='$name',Description='$desc',Year=$year,Times=$time,Start='$start', End='$end' WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
    function deletePlan($id)
    {
        $sql = "DELETE FROM plan WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
    function finishPlan($id)
    {
        $sql = "UPDATE plan SET Status=1 WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
    function countPlan()
    {
        $sql = "SELECT COUNT(ID) as count_id, SUM(Status) as sum_status FROM plan";
        return $this->da->Fetch($sql);
    }
    function contraintPlan()
    {
        $sql = "SELECT Status FROM plan WHERE Status=0";
        return $this->da->Fetch($sql);
    }

}