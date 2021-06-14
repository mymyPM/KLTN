<?php
include_once("source/models/scientific_research.php");
$scien = new Scientific();
$id = $_SESSION["userID"];
$result = $scien->getReport($id);
$tong = $scien->sumTime($id);
$tongtgnckh = $tong["tongtg"];
echo var_dump($sum);
include_once("source/views/reseach/report_reseach.php");
?>