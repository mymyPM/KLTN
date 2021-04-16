<?php
include_once("source/views/header_index.php");
?>
<?php
if(isset($_GET['mod']))
{
    $a = ($_GET['mod']);
    $b = ($_GET['act']);

    include_once("source/controllers/".$a."/".$b.".php");
    
}
?>
<?php
if(!isset($_GET['mod']))
{
    include_once("source/views/menu.php");
    include_once("source/views/slider.php");
    include_once("source/views/footer_index.php");
}
?>

       