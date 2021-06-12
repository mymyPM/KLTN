<?php
include_once("source/views/exemption/add_exemption.php");
if(isset($_POST["btnSave"]))
{
    $name = $_POST["txtName"];
    $desc = $_POST["txtDesc"];
    $formula = $_POST["txtRatio"];
    $date = getdate();
    $year = $date["year"];
    $start = $_POST["txtStart"];
    $end = $_POST["txtEnd"];
    echo var_dump($start,$end);
    include_once("source/models/exemption.php");
    $exemption = new Exemption();
    $quota = $exemption->getQuotaID($year);
    $quota_id = $quota["ID"];
    $time = $quota["Time_quota"];
    $reduction = str_replace('x',$time,$formula);
    
    $result = $exemption->add($name,$desc,$formula,$quota_id,$reduction,$start,$end);
    $result2 = $exemption->addTableExemption();
    if($result && $result2)
    {echo"<script>alert('Thêm thành công')</script>";}
    else
        echo"<script>alert('Thêm không thành công')</script>";
}
?>