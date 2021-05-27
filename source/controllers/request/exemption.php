<?php
include_once("source/views/request/exemption.php");
include_once("source/models/exemption.php");
    $exemption = new Exemption();
if(isset($_POST["btnExemption"]))
{
    $lecturer = $_SESSION["userID"];
    $name = $_POST["txtLoai"];
    $m = $exemption->getIdExemptiontypeByName($name);
    $exemption_type = $m["ID"];
    $result = $exemption->addExemption($lecturer,$exemption_type);
    echo var_dump($lecturer,$exemption_type);
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