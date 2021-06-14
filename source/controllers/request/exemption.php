<?php
include_once("source/views/request/exemption.php");
include_once("source/models/exemption.php");
    $exemption = new Exemption();
if(isset($_POST["btnExemption"]))
{
    $lecturer = $_SESSION["userID"];
    $name = $_POST["txtLoai"];
    $m = $exemption->getIdExemptiontypeByName($name);
    $exemption_type = $m["ID"];
    $start = $m["Start"];
    $end = $m["End"];
    $plan = $exemption->getPlanId();
    $plan_id = $plan["ID"];
    //echo var_dump($lecturer,$exemption_type,$start,$end,$plan_id);
    $result = $exemption->addExemption($lecturer,$exemption_type,$start,$end,$plan_id);
    //$add = $exemption->addPlan();
    echo var_dump($lecturer,$exemption_type,$start,$end);
    if($result)
    {
        echo"<script>alert('Add request successfully!!!')</script>";
    }
    else
    {
        echo"<script>alert('Error')</script>";
    }
}
?>