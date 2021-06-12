<?php
include_once("source/models/exemption.php");
$ex = new Exemption();
$result = $ex->getExemp();
include_once("source/views/exemption/list_exemption.php");
?>