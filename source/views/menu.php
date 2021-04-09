<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Trang chủ</a>
  <a href="#news">Thông báo</a>
  <a href="#contact">Liên hệ</a>
  <a href="#about">Giới thiệu</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  <?php 
    if(isset($_SESSION["userID"]))
        {
        if ($_SESSION["GroupID"] === '1') {
            echo "<a href=\"admin.php\" id=\"login\"><i class=\"fa fa-fw fa-user\"></i>Admin</a>";
        }
        if($_SESSION["GroupID"]==='2'){
          echo "<a href=\"pesonal.php\" id=\"login\"><i class=\"fa fa-fw fa-user\"></i>"?><?php echo $_SESSION["Name"]?><?php echo "</a>"  ; 
        }
        {                     
            echo  "<a href=\"index.php?mod=users&act=logout\" id=\"login\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>Logout</a>";
        }
            
        }
    else
        {
            echo  "<a href=\"index.php?mod=users&act=login\" id=\"login\"><i class=\"fa fa-fw fa-user\"></i>Đăng nhập</a>";
        }
    ?> 
       
</div>