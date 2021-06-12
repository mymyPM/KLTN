<?php
include_once("source/models/scientific_research.php");
$scien = new Scientific();
$scienti = $scien->getScientific();
include_once("source/views/reseach/add_reseach.php");
if(isset($_POST["btnSave"]))
{
    $id = $_SESSION["userID"];
    $class = $_POST["txtLoai"];
    $topic = $scien->getgetScientificByName($class);
    $topic_class = $topic["ID"];
    $name = $_POST["txtNameTopic"];
    $time = $_POST["txtTime"];
    $tyle = $_POST["txtTyle"];
    echo var_dump($name,$topic_class,$tyle);
    $result = $scien->addReach($id,$name,$topic_class,$tyle);   
    if($result)
    {
        echo"<script>alert('Thêm thành công')</script>";
    }
    else
        echo"<script>alert('Thêm không thành công')</script>";

}
?>