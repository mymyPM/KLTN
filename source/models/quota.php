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

    function countAccount()
    {
        $sql = "SELECT ID FROM quota";
        return $this->da->NumRows($sql);
    }

}