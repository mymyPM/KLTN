<?php
include_once("source/models/users.php");
include_once("source/models/pages.php");
define("MAX",5);
$user = new Users;
$count = $user->countAccount();
$findStart = Pages::findStart(MAX);
$findPage = Pages::findPages($count,MAX);

$result = $user->getUser($findStart,MAX);

include_once("source/views/users/manage.php");
?>
