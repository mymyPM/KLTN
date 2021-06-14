<?php
include_once("source/views/exemption/add_depart.php");
include_once("source/models/department.php");
$class = new Department();
if(isset($_POST["btnSave"]))
{
    $name = $_POST["txtName"];
    $result = $class->addDepart($name);
    if($result)
    {
        echo"<script>alert('Thêm thành công')</script>";
    }
    else
    echo"<script>alert('Thêm không thành công')</script>";
}

?>