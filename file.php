
<?php
ob_start();
require_once 'C:/Users/Ngoc My/vendor/autoload.php';
include_once("source/models/scientific_research.php");
$scien = new Scientific;
$result = $scien->getListReseach();
$a = 'a';
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();
$sometext='My';
$hout = "<table border=1px solid><th>Tên giảng viên</th><th>Loại đề tài</th><tr><td>".$a."</td></tr><tr><td>".$sometext."</td></tr></table>";
$html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
$html2pdf->writeHTML($hout);
$html2pdf->output();
?>
