<?php
include_once("source/models/users.php");
$user = new Users();
$result = $user->getClassify();
include_once("source/views/exemption/list_class.php");
?>