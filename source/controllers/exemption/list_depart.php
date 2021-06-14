<?php
include_once("source/models/users.php");
$user = new Users();
$result = $user->getDepartment();
include_once("source/views/exemption/list_depart.php");
?>