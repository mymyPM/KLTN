<?php
include_once("DataProvider.php");
class Exemption{
    private $da;
    public function __construct(){
        $this->da = new DataProvider();
    }
    function getExemption()
    {
<<<<<<< HEAD
        $sql = "SELECT * FROM exemption";
=======
        $sql = "SELECT * FROM exemption_type";
>>>>>>> 5100ffea83511f9c73b9e729f22ea32badb06d6f
        return $this->da->FetchAll($sql);
    }
    function getExemptionById($id)
    {
<<<<<<< HEAD
        $sql = "SELECT * FROM exemption WHERE ID=$id";
=======
        $sql = "SELECT * FROM exemption_type WHERE ID=$id";
>>>>>>> 5100ffea83511f9c73b9e729f22ea32badb06d6f
        return $this->da->ExecuteQuery($sql);
    }
    function getExemptionByName($name)
    {
        $sql = "SELECT Name FROM exemption_type WHERE Name=$name";
        return $this->da->ExecuteQuery($sql); 
    }
}
?>