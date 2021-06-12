<?php
//echo var_dump($_SESSION["GroupID"],$_SESSION["username"],$_SESSION["userID"],$_SESSION["GroupID"],$_SESSION["Name"],$_SESSION["Img"]);

             
?>
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
                                        <a href="/vi/gioi-thieu-s104.html">
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
                                <a target="" href="/vi/dao-tao-s24.html">
                                    <span class="menu-lbl">Nghiên cứu</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a target="" href="/vi/tuyen-sinh-s.html">
                                    <span class="menu-lbl">Liên hệ</span>
                                </a>    
                            </li>
                                        
                                        
                                        <?php 
    if(isset($_SESSION["userID"]))
        {
        if ($_SESSION["GroupID"] == '1') 
            {
                echo "<li class=\"dropdown\"><a target=\"\" href=\"admin.php\" ><span class=\"menu-lbl\">Admin</span></a></li>";
            }
        if($_SESSION["GroupID"]=='2')
            {
                echo "<li class=\"dropdown\"><a  target=\"\" href=\"pesonal.php\" ><span class=\"menu-lbl\">"?><?php echo $_SESSION["Name"]?><?php echo"</span></a></li>"; 
            }
        
            
        }
    else
        {
            echo  "<li><a target=\"\" href=\"index.php?mod=users&act=login\" id=\"login\">Đăng nhập</a></li>";
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
                    
                </div>
   
       
</div>
    