<?php
    include_once("source/models/quota.php");
    include_once("source/models/pages.php");

    $quota = new Quota;
    define("MAX",5);
    $count = $quota->countAccount();
    $findStart = Pages::findStart(MAX);
    $findPage = Pages::findPages($count,MAX);

    $result = $quota->getQuota($findStart,MAX);

    include_once("source/views/request/quota.php");
?>