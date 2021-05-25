<?php
    include_once("source/views/request/add_quota.php");
    if(isset($_POST["btnRegister"]))
    {
        $year = $_POST["txtYear"];
        $time = $_POST["txtTime"];
        include_once("source/models/quota.php");
        $quota = new Quota;
        $result = $quota->createQuota($year,$time);
        if($result)
            echo"<script>alert('Thêm định mức thành công')</script>";
        else
            echo"<script>alert('Thêm định mức không thành công')</script>";
    }
?>