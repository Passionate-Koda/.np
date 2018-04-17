<?php
ob_start();
session_start();
include("include/link_include.php");
include("include/authentication.php");
include("include/levelcheck.php");
include("include/student_limit.php");
include("include/level1_limit.php");
authenticate();
if(isset($_SESSION['id'])){
  $session = $_SESSION['id'];
}
$info = adminInfo($conn,$session);
extract($info);
$fname = ucwords($firstname);
$lname = ucwords($lastname);
$error= [];

if(array_key_exists('submit', $_POST)){
  if(empty($_POST['package_name'])){
    $error['package_name']="Enter a Package Name";
  }

  if(empty($error)){
    $clean = array_map('trim', $_POST);
    addPackageName($conn,$clean,$hash_id);
  }
}

if(array_key_exists('add', $_POST)){
  if(empty($_POST['package_list'])){
    $error['package_list']="Enter a Package List";
  }

  if(empty($error)){
    $clean = array_map('trim', $_POST);
    addPackageList($conn,$clean,$hash_id);
  }
}

if(array_key_exists('commit', $_POST)){

  if(empty($_POST['package_n'])){
    $error['package_n']="Enter a Package Name";
  }
  if(empty($_POST['package_l'])){
    $error['package_l']="Enter a Package List";
  }

  if(empty($error)){
    $clean = array_map('trim', $_POST);
    addPackage($conn,$clean,$hash_id);
  }
}

 ?>
<section id="content">
<div class="container">
<div class="row">
  <?php if (isset($_GET['success'])){
  $msg = str_replace('_', ' ', $_GET['success']);

    echo '<div class="col-md-12">
  <div class="inner-box posting">
  <div class="alert alert-success alert-lg" role="alert">
  <h2 class="postin-title">✔ Successful! '.$msg.' </h2>
  <p>Thank you '.ucwords($firstname).', BoardSpeck  is happy to have you around. </p>
  </div>
  </div>
  </div>';
  } ?>
<div class="col-sm-12 col-md-10 col-md-offset-1">
<div class="page-ads box">
<h2 class="title-2">Welcome to the Add Insights page</h2>
<div class="row search-bar mb30 ">
<div class="advanced-search">

<div class="col-md-4 col-sm-12 search-col">
<h3>Insights Categories.</h3>
</div>
</div>
</div>
<form class="form-ad" method="post" action="">
<div class="form-group mb30">
<label class="control-label">Insight Name</label> <?php $display = displayErrors($error, 'package_name');
echo $display ?><input class="form-control input-md" name="package_name" placeholder=" Write Your Insight Name" type="text">
<input class="btn btn-common" type="submit" name="submit" value="ADD">
</form>
</div>
<!-- <form class="form-ad" method="post" action="">
<div class="form-group mb30">
<label class="control-label">Package List</label> <?php //$display = displayErrors($error, 'package_list');echo $display ?><input class="form-control input-md" name="package_list" placeholder="Add package list" type="text">
<input class="btn btn-common" type="submit" name="add" value="ADD">
<br/>
<br/>
</form>
</div> -->



<hr>
<div class="row search-bar mb30 ">
<div class="advanced-search">

<div class="col-md-4 col-sm-12 search-col">
<h3>Insights Sub Categories.</h3>
</div>
</div>
</div>
<form class="form-ad" method="post" action="">
<div class="form-group mb30">
<label class="control-label">INSIGHT CATEGORY</label><br>

<div class="col-md-4 col-sm-4 col-xs-12 search-bar search-bar-nostyle">

<div class="input-group-addon search-category-container">

<label class="control-label"> <select class="dropdown-product selectpicker" required name="package_n">
<option value="">
--SELECT--
</option>
<?php getPackageName($conn); ?>
</select>
<br/>
<br/>
</div>
</div>
<br>
<br>
<br>
<div class="form-group mb30">
<label class="control-label">INSIGHT SUB CATEGORY</label> <?php $display = displayErrors($error, 'package_l');
echo $display ?><input class="form-control input-md" name="package_l" placeholder=" Write Your Selected Insight Sub Category" type="text">
</div>


<input class="btn btn-common" type="submit" name="commit" value="ADD">

</form>
</div>
<br>
<br>
</div>
</div>
</div>
</div>
</div>
</section>

<a class="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
<script src="assets/js/jquery-min.js" type="text/javascript">
  </script>
<script src="assets/js/bootstrap.min.js" type="text/javascript">
  </script>
<script src="assets/js/material.min.js" type="text/javascript">
  </script>
<script src="assets/js/material-kit.js" type="text/javascript">
  </script>
<script src="assets/js/jquery.parallax.js" type="text/javascript">
  </script>
<script src="assets/js/owl.carousel.min.js" type="text/javascript">
  </script>
<script src="assets/js/wow.js" type="text/javascript">
  </script>
<script src="assets/js/main.js" type="text/javascript">
  </script>
<script src="assets/js/jquery.counterup.min.js" type="text/javascript">
  </script>
<script src="assets/js/waypoints.min.js" type="text/javascript">
  </script>
<script src="assets/js/jasny-bootstrap.min.js" type="text/javascript">
  </script>
<script src="assets/js/form-validator.min.js" type="text/javascript">
  </script>
<script src="assets/js/contact-form-script.js" type="text/javascript">
  </script>
<script src="assets/js/jquery.themepunch.revolution.min.js" type="text/javascript">
  </script>
<script src="assets/js/jquery.themepunch.tools.min.js" type="text/javascript">
  </script>
<script src="assets/js/bootstrap-select.min.js">
  </script>
<script src="assets/js/fileinput.js">
  </script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/classix-template/post-ads.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:40:57 GMT -->
</html>
