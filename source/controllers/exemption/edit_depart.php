<?php
include_once("source/views/exemption/edit_depart.php");
if(isset($_POST["btnSave"]))
{
    include_once("source/models/department.php");
    $class = new Department();
    $name = $_POST["txtName"];
    $id = $_GET["id"];
    $result = $class->updateDepart($id,$name);
    if($result)
    {
        echo"<script>alert('Sửa thành công')</script>";
    }
    else
    echo"<script>alert('Sửa không thành công')</script>";
}
?>