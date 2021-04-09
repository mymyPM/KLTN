
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nghiên cứu khoa học</title>
    <link href="css/style_min.css" rel='stylesheet' type='text/css' />
    <?php
        require("source/views/header.php");
    ?>
</head>
<body>
<?php
if(isset($_GET['mod']))
{
    $a = ($_GET['mod']);
    $b = ($_GET['act']);

    include_once("source/controllers/".$a."/".$b.".php");
    
}
?>
<?php
//include_once("source/views/users/left_nav.php");
if(!isset($_GET['mod']))
{
  include_once("source/views/menu.php");
  include_once("source/views/slider.php");
}

?>  
  
<?php
include_once("source/views/footer_user.php");
?>

