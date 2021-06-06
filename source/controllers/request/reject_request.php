<?php
include_once("source/models/list_request.php");
$id = $_GET["id"];
$admin = $_SESSION["userID"];
$request = new ListRequest();
$result = $request->rejectRequest($id,$admin);
$result2 = $request->addReport($id);
if($result && $result2)
    {
        echo"<script>alert('Từ chối thành công!!!')</script>";
    }
    else
    echo"<script>alert('Từ chối không thành công!!!')</script>";
?>