<?php
    include_once("source/views/request/add_exemption_type.php");
    if(isset($_POST["btnRegister"]))
    {
        $name = $_POST["txtName"];
        $desc = $_POST["txtDesc"];
        $ratio = $_POST["txtRatio"];
        $reduce = $_POST["txtReduce"];
        $time = $_POST["txtTime"];
        include_once("source/models/exemption_type.php");
        $exemp = new Exemp;
        $result = $exemp->createExemptionType($name,$desc,$ratio,$reduce,$time);
        if($result)
            echo"<script>alert('Thêm loại miễn giảm thành công')</script>";
        else
            echo"<script>alert('Thêm loại miễn giảm không thành công')</script>";
    }
?>