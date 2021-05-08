<?php
include_once("DataProvider.php");
class Exemption{
    private $da;
    public function __construct(){
        $this->da = new DataProvider();
    }
    function getExemption()
    {
        $sql = "SELECT * FROM admin";
        return $this->da->FetchAll($sql);
    }
    function getExemptionById($id)
    {
        $sql = "SELECT * FROM admin WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
    function getExemptionByName($name)
    {
        $sql = "SELECT Username FROM admin WHERE Name=$name";
        return $this->da->ExecuteQuery($sql); 
    }
}
?>