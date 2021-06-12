<?php
include_once("source/views/request/edit_plan.php");
if(isset($_POST["btnRegister"]))
{
    $name = $_POST["txtName"];
    $desc = $_POST["txtDesc"];
    $year = $_POST["txtYear"];
    $time = $_POST["txtTime"];
    $start = $_POST["txtStart"];
    $end = $_POST["txtEnd"];
    $id = $_GET["id"];
    include_once("source/models/plan.php");
    $user = new Plan;
    $result = $user->updatePlan($name,$desc,$year,$time,$id,$start,$end);
    if($result)
    {
        echo"<script>alert('Sửa đợt xét thành công')</script>";
        header("location:admin.php?mod=request&act=plan");
    }
        
    else
        echo"<script>alert('Sửa đợt xét không thành công')</script>";
}

?>