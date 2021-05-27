<?php
include_once("source/models/exemption.php");
$exemption = new Exemption();
$result = $exemption->getListExemption();
include_once("source/views/request/list_request.php");
?>