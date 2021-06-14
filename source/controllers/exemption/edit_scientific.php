<?php
include_once("source/models/scientific_research.php");
$scien = new Scientific();
$id = $_GET["id"];
$a = $scien->getgetScientificById($id);
include_once("source/views/exemption/edit_scientific.php");
if(isset($_POST["btnSave"]))
{
    $loai = $_POST["txtLoai"];
    $time = $_POST["txtTime"];
    $money = $_POST["txtMoney"];
    $proof = $_POST["txtProof"];
    //echo var_dump($loai);
    
    $result = $scien->updateScien($id,$loai,$time,$proof,$money);
    if($result)
    {
        echo"<script>alert('Sửa thành công')</script>";
    }
    else
        echo"<script>alert('Sửa không thành công')</script>";
}
?>