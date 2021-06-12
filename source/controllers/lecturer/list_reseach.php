<?php
include_once("source/models/scientific_research.php");
$scien = new Scientific();
$result = $scien->getListReseach();
include_once("source/views/exemption/list_reseach.php");
?>