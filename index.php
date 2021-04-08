<?php
    session_start();
    ob_start();
    //error_reporting(0);
?>
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
            echo  "<a href=\"index.php?mod=users&act=logout\" id=\"login\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>Logout</a>";
        }
    else
        {
            echo  "<a href=\"index.php?mod=users&act=login\" id=\"login\"><i class=\"fa fa-fw fa-user\"></i>Đăng nhập</a>";
        }
    ?>    
</div>
<center>                  
<img class="mySlides" src="images/banner2.jpg">
<img class="mySlides" src="images/banner3.jpg">
<img class="mySlides" src="images/banner4.jpg">
<img class="mySlides" src="images/banner5.jpg">
<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
                </center>
</body>
<footer>
    <script>
       var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
    </script>
</footer>
</html>