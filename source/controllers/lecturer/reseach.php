<?php
include_once("source/models/scientific_research.php");
$scien = new Scientific();
$scienti = $scien->getScientific();
include_once("source/views/reseach/add_reseach.php");
if(isset($_POST["btnSave"]))
{
    $id = $_SESSION["userID"];
    $class = $_POST["txtLoai"];
    $topic = $scien->getgetScientificByName($class);
    $topic_class = $topic["ID"];
    $t = $topic["Time"];
    $name = $_POST["txtNameTopic"];
    $time = $_POST["txtTime"];
    $tyle = $_POST["txtTyle"];
    $date = getdate();
    $year = $date["year"];
    include_once("source/models/exemption.php");
    $exemption = new Exemption();
    $quota = $exemption->getQuotaID($year);
    $quota_id = $quota["ID"];
    $time_reseach = ($tyle*$t)/100;
    //echo var_dump($id,$name,$class,$tyle);
    //$result2 = $scien->updateTime($id);
    $result = $scien->addReach($id,$name,$topic_class,$tyle,$time_reseach,$quota_id);   
    if($result)
    {
        echo"<script>alert('Thêm thành công')</script>";
    }
    else
        echo"<script>alert('Thêm không thành công')</script>";

}
?>