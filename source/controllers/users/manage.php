<?php
include_once("source/models/users.php");
$user = new Users;
$result = $user->getUserFull();
include_once("source/views/users/manage.php");
?>