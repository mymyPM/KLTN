<?php
session_start();
ob_start();
//error_reporting(0);
?>
<?php
if(isset($_GET['mod']))
{
    $a = ($_GET['mod']);
    $b = ($_GET['act']);

    include_once("source/controllers/".$a."/".$b.".php");
    
}
?>
<html><head>
        <meta charset="utf-8">
        <!--<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="description" content="Trường Đại học Công nghiệp Thành phố Hồ Chí Minh">
        <meta name="keywords" content="Trường Đại học Công nghiệp TP.HCM, Trường Đại học trọng điểm của Bộ Công Thương, www.iuh.edu.vn, iuh">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/templates/images/icon.ico" rel="shortcut icon">
                    <title>IUH - Trường Đại học Công nghiệp TP.HCM</title>
        <!-- Include bootstrap css -->
        <link href="./templates/2015/libs/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="./templates/2015/libs/bootstrap/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">

        <!-- Include Jquery -->
        <script src="./templates/2015/javascript/jquery-1.11.3.min.js" type="text/javascript"></script>

        <!-- Include bootstrap js -->
        <script src="./templates/2015/libs/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- Include Awesome Icon -->
        <link href="./templates/2015/libs/awesomefont/css/font-awesome.css" type="text/css" rel="stylesheet">

        <!-- Custom bootstrap -->
        <link href="./templates/2015/style/custom-bootstrap.css?ver=1.1" type="text/css" rel="stylesheet">

        <!-- Common Style-->
        <link href="./templates/2015/style/site.css?ver=1.3.12" type="text/css" rel="stylesheet">
        <link href="./css/style.css" type="text/css" rel="stylesheet">

        <!-- Site style -->
        <link href="./templates/2015/style/style.css?ver=1.3.12.1" type="text/css" rel="stylesheet">

        <!-- Menu, Slide Style -->
        <link href="./templates/2015/style/style-menu.css?ver=1.3.13" rel="stylesheet" type="text/css">

        <!-- Menu, Slide Script -->
        <script src="./templates/2015/javascript/menu-slide.js?ver=1.3.12" type="text/javascript"></script>

        <!-- Include Mosaic -->
        <link href="./templates/2015/libs/mosaic/css/mosaic.css" type="text/css" rel="stylesheet">
        <script src="./templates/2015/libs/mosaic/js/mosaic.1.0.1.js" type="text/javascript"></script>

        <!-- Include Owl carousel -->
        <link href="./templates/2015/libs/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet">
        <script src="./templates/2015/libs/owl-carousel/owl.carousel.js" type="text/javascript"></script>

        <!-- Include style responsive -->
        <link href="./templates/2015/style/style-responsive.css?ver=1.3.12" type="text/css" rel="stylesheet">
        
        <!-- Include style print -->
        <link href="./templates/2015/style/style-print.css?ver=1.3.12" type="text/css" rel="stylesheet">
        
    </head>
    