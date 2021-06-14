<?php
include_once("source/models/exemption.php");
$ex = new Exemption();
$result = $ex->getExemption();
include_once("source/views/exemption/list_exemption.php");
?>