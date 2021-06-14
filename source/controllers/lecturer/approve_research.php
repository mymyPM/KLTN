<?php
include_once("source/models/scientific_research.php");
$id = $_GET["id"];
$admin = $_SESSION["userID"];
$research = new Scientific();
$result = $research->approveResearch($id,$admin);
//$result2 = $research->addReport($id);
if($result)
    {
        echo"<script>alert('Duyệt thành công!!!')</script>";
    }
    else
    echo"<script>alert('Duyệt không thành công!!!')</script>";
?>