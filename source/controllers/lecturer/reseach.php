<?php
include_once("source/models/scientific_research.php");
$scien = new Scientific();
$scienti = $scien->getScientific();
include_once("source/views/reseach/add_reseach.php");
if(isset($_POST["btnSave"]))
{
    $class = $_POST["txtLoai"];
    $name = $_POST["txtName"];
    $time = $_POST["txtTime"];
    $result = $scien->addReach($name,$class,$time);
    
    if($result)
    {
        echo"<script>alert('Thêm thành công')</script>";
    }
    else
        echo"<script>alert('Thêm không thành công')</script>";

}
?>