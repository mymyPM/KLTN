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
    <body>
        <!-- Area page -->
        <div id="page">
            <!-- Area header -->
            <header id="page-header">
                
                <div class="header-logo">
                    <div class="container">
                        <div class="col-md-3 logo-left">
                            <a href="/vi" class="logo"> <img alt="iuh" title="iuh" src="./templates/2015/image/logo.png" width="200px">
                            </a>
                        </div>
                        <div class="col-md-9 logo-right">
                            <div class="right-up-title">BỘ CÔNG THƯƠNG</div>
                            <div class="right-title">TRƯỜNG ĐẠI HỌC CÔNG NGHIỆP TP. HỒ CHÍ MINH</div>
                            <div class="right-sub-title">Đổi mới, nâng tầm cao mới - Năng động, hội nhập toàn cầu</div>
                        </div>
                    </div>
                </div>
                <div class="header-menu menu-original">
                    <!--/.navbar-->
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <div class="container">
                                
                                <div style="float: right;">
                                    <button type="button" class="navbar-toggle navbar-menu" data-toggle="collapse" data-target="#collapse-menu">
                                        <span class="icon-bar" style="margin: 0;"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <i class="fa fa-times"></i>
                                        MENU
                                    </button>
                                    <button type="button" class="navbar-toggle navbar-search" data-toggle="collapse" data-target="#collapse-search">
                                        <span class="sr-only">Toggle search</span>
                                        <span class="fa fa-search"></span>
                                    </button>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="collapse navbar-collapse" id="collapse-search">
                            <div class="container">
                                <form method="get" action="/vi/search" class="navbar-form navbar-right form-search-top" role="search">
                                    <label for="search-top" class="lbl-search-top">Tìm kiếm</label>
                                    <div class="form-group has-feedback">
                                        <input type="text" name="keyword" id="search-top" class="form-control txt-search" placeholder="Tìm kiếm...">
                                        <button class="fa fa-search submit-search"></button>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/.navbar-header-->
                        <div class="collapse navbar-collapse" id="collapse-menu">
                            <div class="container">
                                <ul class="nav navbar-nav">
									<li>
										<a target="" href="/vi">
											<span class="menu-lbl"><i class="fa fa-home" aria-hidden="true"></i></span>
										</a> 
                                    </li>
                                                                                                                                                          <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" target="" href="/vi/gioi-thieu-s104.html">
                                            <span class="menu-lbl">Giới thiệu</span>
                                            <span class="glyphicon glyphicon-triangle-bottom"></span> 
                                        </a>
                                         
                                <ul class="dropdown-menu">
                                <li>
                                    <a target="" href="/vi/gioi-thieu-chung-s87.html">
                                        <span class="menu-lbl">Giới thiệu chung</span>
                                    </a> 
                                </li>
                                <li> 
                                    <a target="" href="/vi/tam-nhin-su-mang-muc-tieu-chien-luoc-s14.html">
                                        <span class="menu-lbl">Tầm nhìn - Sứ mạng - Mục tiêu chiến lược</span>
                                    </a> 
                                </li>
                                <li> 
                                    <a target="" href="/vi/so-do-bo-may-to-chuc-s101.html">
                                        <span class="menu-lbl">Sơ đồ bộ máy tổ chức</span>
                                    </a> 
                                </li>
                                <li> 
                                    <a target="" href="/vi/doi-ngu-s17.html">
                                        <span class="menu-lbl">Đội ngũ</span>
                                    </a> 
                                </li>
                                <li> 
                                    <a target="" href="/vi/co-so-vat-chat-s19.html">
                                        <span class="menu-lbl">Cơ sở vật chất</span>
                                    </a> 
                                </li>
                                <li> 
                                    <a target="" href="/vi/ba-cong-khai-fi47">
                                        <span class="menu-lbl">Ba công khai</span>
                                    </a> 
                                </li>
                                <li> 
                                    <a target="" href="/vi/chinh-sach-chat-luong-s105.html">
                                        <span class="menu-lbl">Chính sách chất lượng</span>
                                    </a> 
                                </li> 
                            </ul>
                            <li> 
                                <a class="dropdown-toggle" data-toggle="dropdown" target="" href="/vi/dao-tao-s24.html">
                                    <span class="menu-lbl">Nghiên cứu</span>
                                </a>
                            </li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" target="" href="/vi/tuyen-sinh-s.html">
                                                <span class="menu-lbl">Liên hệ</span>
                                        </li>
                                        
                                        
                                        <?php 
    if(isset($_SESSION["userID"]))
        {
        if ($_SESSION["GroupID"] === '1') {
            echo "<li><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" target=\"\" href=\"admin.php\" ><span class=\"menu-lbl\">Admin</span></a></li>";
        }
        if($_SESSION["GroupID"]==='2'){
          echo "<li><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" target=\"\" href=\"pesonal.php\" id=\"login\"><span class=\"menu-lbl\">"?><?php echo $_SESSION["Name"]?><?php echo"</span></a></li>"; 
        }
        {                     
            echo  "<li><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" target=\"\" href=\"index.php?mod=users&act=logout\" id=\"login\"><span class=\"menu-lbl\">Logout</span></a></li>";
        }
            
        }
    else
        {
            echo  "<li><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" target=\"\" href=\"index.php?mod=users&act=login\" id=\"login\">Đăng nhập</a></li>";
        }
    ?>                                  
                                                           
                                         
                                             
                                         
                                    
                                </ul>
                                <form method="get" action="/vi/search" class="navbar-form navbar-right form-search-top" role="search">
                                    <div class="form-group has-feedback">
                                        <input type="text" name="keyword" class="form-control txt-search" placeholder="Tìm kiếm...">
                                        <button class="fa fa-search submit-search"></button>
                                    </div>
                                </form>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--/.navbar-collapse-->
                        <div class="clearfix"></div>
                    </nav>
                    <!--/.navbar-->
                    <div class="clearfix"></div>
                </div><div class="header-menu menu-fixed" style="display: none;">
                    <!--/.navbar-->
                    <nav class="navbar navbar-default" role="navigation">
                        
                        
                        <!--/.navbar-header-->
                        <div class="collapse navbar-collapse" id="collapse-menu-fixed">
                            <div class="container">
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--/.navbar-collapse-->
                        <div class="clearfix"></div>
                    </nav>
                    <!--/.navbar-->
                    <div class="clearfix"></div>
                </div>
                <div class="header-logo-mobile" style="padding: 10px 0;">
                    <div class="container">
                        <a href="/vi">
                                                            <img class="banner-small" alt="iuh" title="iuh" style="width: 100%;" src="./templates/2015/image/bannerIUH_small.png">
                                <img class="banner-medium" alt="iuh" title="iuh" style="width: 100%;" src="./templates/2015/image/bannerIUH_medium.png">
                                                    </a>
                    </div>
                    <!--
                    <div class="container">
                        <div class="col-sm-3 logo-left">
                            <a href="/vi" class="logo">
                                <img alt="iuh" title="iuh" src="/templates/2015/image/logo.png" width="200px">
                            </a>
                        </div>
                        <div class="col-sm-9 logo-right">
                            <div class="right-up-title">BỘ CÔNG THƯƠNG</div>
                            <div class="right-title">
                                <span>TRƯỜNG ĐẠI HỌC CÔNG NGHIỆP</span>
                                <span>TP. HỒ CHÍ MINH</span>
                            </div>
                            <div class="right-sub-title">Đổi mới, nâng tầm cao mới - Năng động, hội nhập toàn cầu</div>
                        </div>
                    </div>
                    -->
                </div>
   
       
</div>
    