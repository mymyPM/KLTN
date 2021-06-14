<?php
$id = $_SESSION["userID"];
include_once("source/models/list_request.php");
$report = new ListRequest();
$result = $report->myReport($id);
$tong = $report->sumTime($id);
$tongthoigian = $tong["tongtg"];
//echo var_dump($sum);
include_once("source/views/request/report.php");
?>