<?php
$id = $_SESSION["userID"];
include_once("source/models/list_request.php");
$report = new ListRequest();
$result = $report->myReport($id);
include_once("source/views/request/report.php");
?>