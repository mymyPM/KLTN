<?php
include_once("source/models/plan.php");
$plan = new Plan();
$id = $_GET["id"];
$result = $plan->finishPlan($id);
if($result)
{
    header("location:admin.php?mod=request&act=plan");
}
?>