<?php
include_once("DataProvider.php");
class Exemp{
    private $da;
    public function __construct(){
        $this->da = new DataProvider();
    }
    
    function getExemp()
    {
        $sql = "SELECT ID, Name, Description, Ratio, reduce_type, time_application
                FROM exemption_type";
        return $this->da->FetchAll($sql);
    }

    function countAccount()
    {
        $sql = "SELECT ID FROM exemption_type";
        return $this->da->NumRows($sql);
    }
    function createExemptionType($name,$desc,$ratio,$reduce,$time)
    {
        $sql = "INSERT INTO exemption_type(Name,Description,Ratio,reduce_type,time_application) 
                VALUES ('$name','$desc',$ratio,'$reduce','$time')";
        return $this->da->ExecuteQuery($sql);
    }
}