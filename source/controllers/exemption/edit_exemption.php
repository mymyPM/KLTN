<?php
include_once("source/views/exemption/edit_exemption.php");
$id = $_GET["id"];
if(isset($_POST["btnSave"]))
{
    $name = $_POST["txtName"];
    //$desc = $_POST["txtDesc"];
    $formula = $_POST["txtRatio"];
    $date = getdate();
    $year = $date["year"];
    $start = $_POST["txtStart"];
    $end = $_POST["txtEnd"];
    //echo var_dump($start,$end);
    include_once("source/models/exemption.php");
    $exemption = new Exemption();
    $quota = $exemption->getQuotaID($year);
    $quota_id = $quota["ID"];
    $time = $quota["Time_quota"];
    $reduction = str_replace('x',$time,$formula);
    
    $result = $exemption->updateExemption($id,$name,$formula,$quota_id,$reduction,$start,$end);
    //$result2 = $exemption->updateTableExemption($name,$desc,$reduction,$start,$end);
    if($result)
    {echo"<script>alert('Sửa thành công')</script>";}
    else
        echo"<script>alert('Sửa không thành công')</script>";
}
?>