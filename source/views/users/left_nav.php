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
            <h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span>Lecturer<span class="dashboard_text">Nghiên cứu khoa học</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="pesonal.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
			  <li class="treeview">
        <?php
              include_once("source/models/exemption.php");
              $exemp = new Exemption();
              $m = $exemp->getPlanId();
              $id = $m["ID"];
              if(isset($id))
              {
                echo "<a href=\"pesonal.php?mod=request&act=exemption\">";
              }
              else
              {
                echo "<a href=\"pesonal.php?mod=request&act=404\">";
              }
                ?>
                
                <i class="fa fa-laptop"></i>
                <span>Kê khai miễn giảm</span>
                </a>
              </li>
              <li class="treeview">
              
               
              <a href="pesonal.php?mod=lecturer&act=reseach">
                            
                <i class="fa fa-pie-chart"></i>
                <span>Kê khai hoạt động NCKH</span>
                </a>
              </li>
              <li class="treeview">
                <a href="pesonal.php?mod=request&act=report">
                <i class="fa fa-pie-chart"></i>
                <span>My report</span>
                </a>
              </li>    
              <li class="treeview">
                <a href="pesonal.php?mod=lecturer&act=report_reseach">
                <i class="fa fa-pie-chart"></i>
                <span>Scientific report</span>
                </a>
              </li>   
              <li class="treeview">
                <a href="pesonal.php?mod=users&act=profile">
                <i class="fa fa-pie-chart"></i>
                <span>My profile</span>
                </a>
              </li>        
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->