<?php
include_once("source/models/scientific_research.php");
$scien = new Scientific();
$result = $scien->getList();
?>