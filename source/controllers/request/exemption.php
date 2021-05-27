<?php
    include_once("source/views/request/exemption.php");
    include_once("source/models/exemption.php");
    $exemption = new Exemption();
    $name = $_POST["txtLoai"];
    $result = $exemption->getExemptionByName($name);
    if($result)
    {
        return $name;
    }
    else
    {
        return 1;
    }
?>