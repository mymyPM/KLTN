<?php
include_once("source/views/request/exemption.php");

if(isset($_POST["btnExemption"]))
{
    $lecturer = $_SESSION["LecturerID"];
    $exemp = $_POST["txtLoai"];
    $exemption_type = $exemption->getExemptiontypeByName($exemp);
    include_once("source/models/exemption.php");
    $exemption = new Exemption();
    $result = $exemption->addExemption($lecturer,$exemption_type);
    echo var_dump($lecturer,$exemption_type,$exemp);
    if($result)
    {
        echo"<script>alert('Add request successfully!!!')</script>";
    }
    else
    {
        echo"<script>alert('Error')</script>";
    }
}
?>