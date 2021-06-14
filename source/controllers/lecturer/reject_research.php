<?php
include_once("source/models/scientific_research.php");
$id = $_GET["id"];
$admin = $_SESSION["userID"];
$request = new Scientific();
$result = $request->rejectResearch($id,$admin);
//$result2 = $request->addReport($id);
if($result)
    {
        echo"<script>alert('Từ chối thành công!!!')</script>";
    }
    else
    echo"<script>alert('Từ chối không thành công!!!')</script>";
?>