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
    function addReach($name,$class,$time)
    {
        $sql = "INSERT INTO reseach(Name_topic,Topic_classic,Time_reseach) VALUES ('$name',$class,'$time')";
        return $this->da->ExecuteQuery($sql);
    }
    function getList()
    {
        $sql = "SELECT * FROM reseach";
        return $this->da->FetchAll();
    }
}
?>