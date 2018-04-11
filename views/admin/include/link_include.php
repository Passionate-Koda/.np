<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="author" content="GrayGrids Team">
<title>Philanthrophy Circuit</title>





<script type="text/javascript" src="assets/ckeditor5-build-classic/ckeditor.js"></script>
<link rel="shortcut icon" href="assets/img/favicon.png">
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
<link rel="stylesheet" href="assets/css/main.css" type="text/css">
<link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
<link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
<link rel="stylesheet" href="assets/extras/settings.css" type="text/css">
<link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
<link href="assets/css/fileinput.css" rel="stylesheet">
</head>
<body>

<div class="header">
<nav class="navbar navbar-default main-navigation" role="navigation">
<div class="container">
<div class="navbar-header">

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a class="navbar-brand logo" href="#"><img src="assets/img/logo3.jpg" alt=""></a>
</div>
<div class="collapse navbar-collapse" id="navbar">
<ul class="nav navbar-nav navbar-right">
<li class="postadd">
<a class="btn btn-danger btn-post" href="https://mckodev.com.ng"><span class="fa fa-plus-circle"></span> Go to Public</a>
</li>
</ul>
</div>



</div>
</nav>

<div class="navmenu navmenu-default navmenu-fixed-left offcanvas">

<div class="close" data-toggle="offcanvas" data-target=".navmenu">
<i class="fa fa-close"></i>
</div>
<h3 class="title-menu">All Pages</h3>
<ul class="nav navmenu-nav">
  <?php $level = adminLevel($conn, $_SESSION['id']);
  if($level == NULL ){
   ?>

<li> <a href="logout">Logout</a></li>
<?php }elseif($level == 1){
   ?>
<li><a href="admin">Home</a></li>
<li><a href="manageViews">Manage Views</a></li>
<!-- <li><a href="adminRegistration">Add Admin</a></li> -->
<!-- <li><a href="addProfile">Add Profile</a></li> -->
<!-- <li><a href="addArticle">Add Article</a></li> -->
<!-- <li><a href="addNews">Add News</a></li> -->
<!-- <li><a href="addReport">Add Report</a></li> -->
<!-- <li><a href="addGrant">Add Grant</a></li> -->
<!-- <li><a href="addTraining">Add Training</a></li> -->
<!-- <li><a href="addResources">Add Resources</a></li> -->
<li><a href="manageReports">Manage Reports</a></li>
<li><a href="manageGrants">Manage Grants</a></li>
<li><a href="manageTrainings">Manage Training</a></li>
<li><a href="manageNews">Manage News</a></li>
<li><a href="manageInsights">Manage Article</a></li>
  <li><a href="manageEvent">Manage Events</a></li>
<!-- <li><a href="insightCategory">Create Insight Category</a></li> -->
<!-- <li><a href="newsCategory">Create News Category</a></li> -->
<!-- <li><a href="addFaq">Add FAQ</a></li> -->
<li> <a href="logout">Logout</a></li>
<?php }else{ ?>

  <li><a href="admin">Home</a></li>
  <li><a href="manageViews">Manage Views</a></li>
  <!-- <li><a href="adminRegistration">Add Admin</a></li> -->
  <!-- <li><a href="addProfile">Add Profile</a></li> -->
  <li><a href="addArticle">Add Article</a></li>
  <li><a href="addNews">Add News</a></li>
  <li><a href="addInsight">Add Insight</a></li>
  <li><a href="addReport">Add Report</a></li>
  <li><a href="addGrant">Add Grant</a></li>
  <li><a href="addTraining">Add Training</a></li>
  <li><a href="addEvent">Add Event</a></li>

  <!-- <li><a href="addResources">Add Resources</a></li> -->
  <li><a href="manageReports">Manage Reports</a></li>
  <li><a href="manageGrants">Manage Grants</a></li>
  <li><a href="manageTrainings">Manage Trainings</a></li>
  <li><a href="manageNews">Manage News</a></li>
  <li><a href="manageArticles">Manage Articles</a></li>
  <li><a href="manageInsights">Manage Insights</a></li>
  <li><a href="manageEvent">Manage Events</a></li>



<?php $check2 = adminFullInfo($conn,$_SESSION['id']);
if($check2['portfolio'] == 555666777888999000){
?>
  <li><a href="addAbout">Add About Us</a></li>
  <li><a href="manageAbout">About Us</a></li>
  <li><a href="viewUsers">Manage Users</a></li>
<?php } ?>
  <!-- <li><a href="insightCategory">Create Insight Category</a></li> -->
  <!-- <li><a href="newsCategory">Create News Category</a></li> -->
  <!-- <li><a href="addFaq">Add FAQ</a></li> -->
  <li> <a href="logout">Logout</a></li>

<?php } ?>
</ul>
</div>
<div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
<p><i class="fa fa-file-text-o"></i> All Pages</p>
</div>
