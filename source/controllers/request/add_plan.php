<?php
include_once("source/views/request/add_plan.php");
if(isset($_POST["btnRegister"]))
{
    $name = $_POST["txtName"];
    $desc = $_POST["txtDesc"];
    $year = $_POST["txtYear"];
    $time = $_POST["txtTime"];
    $start = $_POST["txtStart"];
    $end = $_POST["txtEnd"];
    include_once("source/models/plan.php");
    $user = new Plan;
    $ds = $user->getPlan();
        $result = $user->createPlan($name,$desc,$year,$time,$start,$end);
        if($result)
        {
            echo"<script>alert('Thêm đợt xét thành công')</script>";
            header("location:admin.php?mod=request&act=plan");
        }
        
        else
            echo"<script>alert('Thêm đợt xét không thành công')</script>";
    
    
}

?>