<?php
    
    include_once("source/views/request/edit_quota.php");
    if(isset($_POST["btnRegister"]))
    {
        $year = $_POST["txtYear"];
        $time = $_POST["txtTime"];
        $id = $_GET["id"];
        include_once("source/models/quota.php");
        $quota = new Quota;
        $result = $quota->updateQuota($id,$year,$time);
        if($result)
            {
                echo"<script>alert('Sửa định mức thành công')</script>";
                header("location:admin.php?mod=request&act=quota");
            }
        else
            echo"<script>alert('Sửa định mức không thành công')</script>";
    }
?>