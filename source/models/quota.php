<?php
include_once("DataProvider.php");
class Quota{
    private $da;
    public function __construct(){
        $this->da = new DataProvider();
    }
    
    function getQuota()
    {
        $sql = "SELECT ID, Year, Time_quota
                FROM quota";
        return $this->da->FetchAll($sql);
    }
    function getQuotaByYear($year)
    {
        $sql = "SELECT * FROM quota WHERE Year=$year";
        return $this->da->Fetch($sql);
    }
    function getQuotaById($id)
    {
        $sql = "SELECT * FROM quota WHERE ID=$id";
        return $this->da->Fetch($sql);
    }
    function countAccount()
    {
        $sql = "SELECT ID FROM quota";
        return $this->da->NumRows($sql);
    }
    function createQuota($year,$time)
    {
        $sql = "INSERT INTO quota(Year,Time_quota) 
                VALUES ($year,$time)";
        return $this->da->ExecuteQuery($sql);
    }
    function updateQuota($id,$year,$time)
    {
        $sql = "UPDATE quota SET Year=$year,Time_quota=$time WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
    function deleteQuota($id)
    {
        $sql = "DELETE FROM quota WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
}