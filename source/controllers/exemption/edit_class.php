<?php
include_once("source/views/exemption/edit_class.php");
if(isset($_POST["btnSave"]))
{
    include_once("source/models/classify.php");
    $class = new Classify();
    $name = $_POST["txtName"];
    $id = $_GET["id"];
    $result = $class->updateClass($id,$name);
    if($result)
    {
        echo"<script>alert('Sửa thành công')</script>";
    }
    else
    echo"<script>alert('Sửa không thành công')</script>";
}
?>