<?php
error_reporting('0');
?>
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span>Admin<span class="dashboard_text">Quản lý nghiên cứu</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="admin.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="admin.php?mod=lecturer&act=manage">
                <i class="fa fa-laptop"></i>
                <span>Quản lý thành viên</span>
                </a>
              </li>
              <li class="treeview">
                <a href="admin.php?mod=users&act=account">
                <i class="fa fa-pie-chart"></i>
                <span>Quản lý tài khoản</span>
                </a>
              </li>
              <li class="treeview">
              <li class="treeview">
                <a href="admin.php?mod=request&act=quota">
                <i class="fa fa-laptop"></i>
                <span>Thiết lập định mức</span>
                </a>
              </li>
			  <li>
                <a href="admin.php?mod=request&act=plan">
                <i class="fa fa-th"></i> <span>Thiết lập đợt xét</span>
                </a>
              </li>
              <li class="treeview">
                <a href="admin.php?mod=request&act=list_request">
                <i class="fa fa-edit"></i> <span>Yêu cầu miễn giảm</span>
                <?php
                include_once("source/models/exemption.php");
                $exemption = new Exemption();
                $result = $exemption->getStatus();
                if(isset($result))       
                {
                  if($result["count_status"]!=0)
                  {
                    echo "<span class='label label-primary pull-right'>";
                    echo $result["count_status"];
                    echo "</span>";
                  }                    
                } 
                ?>
                
                </a>
              </li>
              <li class="treeview">
                <a href="admin.php?mod=request&act=list_approved">
                <i class="fa fa-table"></i> <span>Yêu cầu đã duyệt</span>
                </a>
              </li>
              <li class="treeview">
                <a href="admin.php?mod=exemption&act=list_exemption">
                <i class="fa fa-envelope"></i> <span>Quản lý loại miễn giảm</span>
                </a>
              </li>
              <li class="treeview">
                <a href="admin.php?mod=exemption&act=list_class">
                <i class="fa fa-folder"></i> <span>Quản lý phân loại</span>
                </a>
              </li>
              <li class="treeview">
                <a href="admin.php?mod=exemption&act=list_depart">
                <i class="fa fa-folder"></i> <span>Quản lý loại đơn vị</span>
                </a>
              </li>
              <li class="treeview">
                <a href="admin.php?mod=request&act=scientific">
                <i class="fa fa-pie-chart"></i>
                <span>Quản lý danh mục</span>
                </a>
              </li>
              <li class="treeview">
                <a href="admin.php?mod=request&act=list_research">
                <i class="fa fa-pie-chart"></i>
                <span>Quản lý hoạt động NCKH</span>
                </a>
              </li>
              <li class="treeview">
                <a href="admin.php?mod=lecturer&act=list_reseach">
                <i class="fa fa-pie-chart"></i>
                <span>Duyệt hoạt động NCKH</span>
                <?php
                include_once("source/models/scientific_research.php");
                $scien = new Scientific();
                $result = $scien->getStatus();
                if(isset($result))       
                {
                  if($result["count_status"]!=0)
                  {
                    echo "<span class='label label-primary pull-right'>";
                    echo $result["count_status"];
                    echo "</span>";
                  }                    
                }
                ?>
                </a>
              </li>
              <li class="treeview">
                <a href="admin.php?mod=statistic&act=list_statistic">
                <i class="fa fa-pie-chart"></i>
                <span>Thống kê</span>
                </a>
              </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->