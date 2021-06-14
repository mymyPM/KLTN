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
        return $this->da->Fetch($sql);
    }
    function getExemptionByName($name)
    {
        $sql = "SELECT Name FROM exemption_type WHERE Name=$name";
        return $this->da->ExecuteQuery($sql); 
    }
    function getIdExemptiontypeByName($name)
    {
        $sql = "SELECT ID,Start,End FROM exemption WHERE Name='".$name."'";
        return $this->da->Fetch($sql);
    }
    function getTime($name)
    {
        $sql = "SELECT Start, End FROM exemption WHERE Reason='".$name."'";
        return $this->da->Fetch($sql); 
    }
    function addExemption($lecturer,$exemption_type,$start,$end,$plan_id)
    {
        $sql = "INSERT INTO approved (LecturerID,ExemptionID,Status,Start,End,Plan_ID) VALUES ($lecturer,$exemption_type,0,'$start','$end',$plan_id)";
        return $this->da->ExecuteQuery($sql);
    }
    //function addPlan()
    //{
    //    $sql = "INSERT INTO approved(Plan_ID) SELECT ID FROM plan WHERE Status=0";
    //    return $this->da->ExecuteQuery($sql);
    //}
    function getPlanId()
    {
        $sql = "SELECT ID FROM plan p WHERE Status=0";
        return $this->da->Fetch($sql);
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
    function add($name,$formula,$quota_id,$reduction,$start,$end)
    {
        $sql = "INSERT INTO exemption(Name,Formula,ID_quota,reduction,Start,End) VALUES ('$name','$formula','$quota_id',$reduction,'$start','$end')";
        return $this->da->ExecuteQuery($sql);
    }
    //function addTableExemption()
    //{
    //    $sql = "INSERT INTO exemption(Reason,Reduction_time,ID_test,Start,End) SELECT CONCAT(Name,',', Description) as reason,reduction,ID,Start,End FROM test WHERE ID  NOT IN (SELECT ID_test FROM exemption)";
    //    
    //    return $this->da->ExecuteQuery($sql);
    //}
    function updateExemption($id,$name,$formula,$quota_id,$reduction,$start,$end)
    {
        $sql = "UPDATE exemption SET Name='$name',Formula='$formula',ID_quota=$quota_id,
        reduction='$reduction',Start='$start',End='$end' WHERE ID=$id ";
        return $this->da->ExecuteQuery($sql);
    }
    function deleteExemp($id)
    {
        $sql = "DELETE FROM exemption WHERE ID=$id";
        return $this->da->ExecuteQuery($sql);
    }
}
?>