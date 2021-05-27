<?php
    include_once("source/models/request_approve.php");
    include_once("source/models/pages.php");

    $requestapprove = new RequestApprove;
    define("MAX",5);
    $count = $requestapprove->countAccount();
    $findStart = Pages::findStart(MAX);
    $findPage = Pages::findPages($count,MAX);

    $result = $requestapprove->getRequestApprove($findStart,MAX);

    include_once("source/views/request/request_approve.php");
?>