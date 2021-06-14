<?php
    include_once("source/models/scientific_research.php");
    include_once("source/models/pages.php");

    $scien = new Scientific;
    define("MAX",5);
    $count = $scien->countAccount();
    $findStart = Pages::findStart(MAX);
    $findPage = Pages::findPages($count,MAX);

    $result = $scien->getScientific($findStart,MAX);

    include_once("source/views/request/scientific.php");
?>