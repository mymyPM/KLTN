<?php
include_once("DataProvider.php");
class Exemption{
    private $da;
    public function __construct(){
        $this->da = new DataProvider();
    }
    function getExemption()
    {
        $sql = "SELECT * FROM exemption";
        return $this->da->FetchAll($sql);
    }
    function getExemptionById($id)
    {
        $sql = "SELECT * FROM exemption WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
    function getExemptionByName($name)
    {
        $sql = "SELECT Name FROM exemption_type WHERE Name=$name";
        return $this->da->ExecuteQuery($sql); 
    }
    function getIdExemptiontypeByName($name)
    {
        $sql = "SELECT ID FROM exemption WHERE Reason='".$name."'";
        return $this->da->Fetch($sql);
    }
    function addExemption($lecturer,$exemption_type)
    {
        $sql = "INSERT INTO approved (LecturerID,ExemptionID,Status) VALUES ($lecturer,$exemption_type,'0')";
        return $this->da->ExecuteQuery($sql);
    }
    function getListRequest()
    {
        $sql = "SELECT A.ID, L.Name, E.Reason, E.Reduction_time FROM approved A
            JOIN lecturers L ON A.LecturerID=L.ID
            JOIN exemption E ON L.ID=E.LectureID";
            return $this->da->FetchAll($sql);
    }
    function getStatus()
    {
        $sql = "SELECT Status, COUNT(Status) AS count_status FROM approved WHERE Status=0";
        return $this->da->Fetch($sql);
    }
    function getQuotaID($year)
    {
        $sql = "SELECT ID,Time_quota FROM quota WHERE Year=$year";
        return $this->da->Fetch($sql);
    }
    function add($name,$desc,$formula,$quota_id,$reduction)
    {
        $sql = "INSERT INTO test(Name,Description,Formula,ID_quota,reduction) VALUES ('$name','$desc','$formula','$quota_id',$reduction)";
        return $this->da->ExecuteQuery($sql);
    }
    function addTableExemption()
    {
        $sql = "INSERT INTO exemption(Reason,Reduction_time,ID_test) SELECT CONCAT(Name,',', Description) as reason,reduction,ID FROM test WHERE ID  NOT IN (SELECT ID_test FROM exemption)";
        
        return $this->da->ExecuteQuery($sql);
    }
}
?>