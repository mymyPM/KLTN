<?php
include_once("source/views/request/add_plan.php");
if(isset($_POST["btnRegister"]))
{
    $name = $_POST["txtName"];
    $desc = $_POST["txtDesc"];
    $year = $_POST["txtYear"];
    $time = $_POST["txtTime"];
    include_once("source/models/plan.php");
    $user = new Plan;
    $result = $user->createPlan($name,$desc,$year,$time);
    if($result)
        echo"<script>alert('Thêm đợt xét thành công')</script>";
    else
        echo"<script>alert('Thêm đợt xét không thành công')</script>";
}

?>