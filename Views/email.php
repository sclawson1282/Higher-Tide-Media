<?php
    mail('shawn@highertidemedia.com', $_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Higher Tide Media | Thank You!</title>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="styles/style.css" />

</head>
<body class="page">
<div id="wrap">
  <div id="header"><a href="index.html"><img src="images/logo.jpg" alt="This is the company logo" /></a>
    <div id="nav">
      <ul class="menu">
        <li><a href="services.html">Services</a></li>
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="articles.html">Articles</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
    <!--end nav-->
  </div>
  <!--end header-->
  <div class="page-headline">Thank You!</div>
  <div id="main">
    <div id="project-content">
      <div id="project-header">
      </div>
      <!--end project-header-->
      <h3>Your request has been sent!</h3>
    </div>
    <!--end project-content-->
    <div id="project-image-large">
    	
    </div>
    <!--end project-image-large-->
  </div>
  <!--end main-->
  <div id="footer">
    <p class="copyright">Copyright &copy; <a href="index.html">www.highertidemedia.com</a> - All Rights Reserved</p>
  </div>
  <!--end footer-->
</div>
<!--end wrap-->

</html>