<?php
include_once("source/views/exemption/add_class.php");
include_once("source/models/classify.php");
$class = new Classify();
if(isset($_POST["btnSave"]))
{
    $name = $_POST["txtName"];
    $result = $class->addClass($name);
    if($result)
    {
        echo"<script>alert('Thêm thành công')</script>";
    }
    else
    echo"<script>alert('Thêm không thành công')</script>";
}

?>