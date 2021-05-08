<?php
include_once("source/models/users.php");
$search = new Users;
$name = $_POST["txtSearch"];
$result = $search->getUserByName($name);
include_once("source/views/users/search.php");
?>