<?php
    include_once("source/models/scientific_research.php");
    include_once("source/models/pages.php");
    $lrs = new Scientific;
    $result = $lrs->listResearch();
    include_once("source/views/request/list_research.php");
?>