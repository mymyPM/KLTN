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
    function getgetScientificByName($name)
    {
        $sql = "SELECT Name FROM scientific_research WHERE Name=$name";
        return $this->da->ExecuteQuery($sql); 
    }
}
?>