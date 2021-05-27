<?php
include_once("DataProvider.php");
class Plan{
    private $da;
    public function __construct(){
        $this->da = new DataProvider();
    }
    
    function getPlan()
    {
        $sql = "SELECT ID, Name, Description, Year, `Times`
                FROM plan";
        return $this->da->FetchAll($sql);
    }

    function countAccount()
    {
        $sql = "SELECT ID FROM plan";
        return $this->da->NumRows($sql);
    }
    function createPlan($name,$desc,$year,$time)
    {
        $sql = "INSERT INTO plan(Name,Description,Year,Times)
                VALUES ('$name','$desc',$year,$time)";
        return $this->da->ExecuteQuery($sql);
    }

}