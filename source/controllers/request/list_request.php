<?php
    include_once("source/models/list_request.php");
    include_once("source/models/pages.php");

    $lr = new ListRequest;
    define("MAX",5);
    $count = $lr->countAccount();
    $findStart = Pages::findStart(MAX);
    $findPage = Pages::findPages($count,MAX);

    $result = $lr->getList($findStart,MAX);

    include_once("source/views/request/list_request.php");
?>