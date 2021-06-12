<?php
include_once("source/views/exemption/add_scientific.php");
if(isset($_POST["btnSave"]))
{
    $loai = $_POST["txtLoai"];
    $time = $_POST["txtTime"];
    $money = $_POST["txtMoney"];
    $proof = $_POST["txtProof"];
    //echo var_dump($loai);
    include_once("source/models/scientific_research.php");
    $scien = new Scientific();
    $result = $scien->addScientific($loai,$time,$proof,$money);
    if($result)
    {
        echo"<script>alert('Thêm thành công')</script>";
    }
    else
        echo"<script>alert('Thêm không thành công')</script>";
}
?>