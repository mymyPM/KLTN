<?php
require("source/views/header.php");
require("source/views/left_nav.php");
	require("source/views/head_nav.php");
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
	
	
	//require("source/views/main.php");
?>


<?php
	require("source/views/footer.php");
?>		