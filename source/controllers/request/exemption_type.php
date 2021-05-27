<?php
include_once("source/models/exemption_type.php");
include_once("source/models/pages.php");

$exemp = new Exemp;
define("MAX",5);
$count = $exemp->countAccount();
$findStart = Pages::findStart(MAX);
$findPage = Pages::findPages($count,MAX);

$result = $exemp->getExemp($findStart,MAX);

include_once("source/views/request/exemption_type.php");
?>