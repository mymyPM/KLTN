<?php
include_once("source/models/plan.php");
include_once("source/models/pages.php");

$plan = new Plan;
define("MAX",5);
$count = $plan->countAccount();
$findStart = Pages::findStart(MAX);
$findPage = Pages::findPages($count,MAX);

$result = $plan->getPlan($findStart,MAX);

include_once("source/views/request/plan.php");
?>