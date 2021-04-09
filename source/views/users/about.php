<?php
include_once("source/views/users/left_nav.php");

?>
<?php
if(isset($_GET['mod']))
{
    $a = ($_GET['mod']);
    $b = ($_GET['act']);

    include_once("source/controllers/".$a."/".$b.".php");
}
?>