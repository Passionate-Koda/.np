<?php
ob_start();
session_start();
include("include/link_include.php");
include("include/authentication.php");
include("include/student_limit.php");
include("include/level1_limit.php");
authenticate();
include("include/levelcheck.php");
if(isset($_SESSION['id'])){
  $session = $_SESSION['id'];
}
$info = adminInfo($conn,$session);
extract($info);
$fname = ucwords($firstname);
$lname = ucwords($lastname);

$error= [];

if(array_key_exists('submit', $_POST)){
  $ext = ["image/jpg", "image/JPG", "image/jpeg", "image/JPEG", "image/png", "image/PNG"];
  if(empty($_FILES['upload']['name'])){
    $error['upload'] = "Please choose file";
  }

  if(empty($_POST['name'])){
    $error['name']="Enter a Name";
  }

  if(empty($_POST['link'])){
    $error['link']="Enter a Link";
  }

  if(empty($_POST['about'])){
    $error['about']="Enter a About";
  }
  if(empty($error)){
    $ver['a'] = compressImage($_FILES,'upload',50, 'uploads/' );
    $clean = array_map('trim', $_POST);
    addProject($conn, $clean,$ver,$hash_id);
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
<h2 class="title-2">Welcome to the Project Page</h2>
<div class="row search-bar mb30 ">
<div class="advanced-search">
<form class="search-form" method="get">
<div class="col-md-4 col-sm-12 search-col">
<h3>Please add Project</h3>
</div>
</form>
</div>
</div>
<form class="form-ad" method="post" action="" enctype="multipart/form-data">
<div class="form-group mb30">
<label class="control-label">Project Name</label><?php $display = displayErrors($error, 'name');
echo $display ?> <input class="form-control input-md" name="name" placeholder="Enter name of the project"  type="text">
</div>
<div class="form-group mb30">
<label class="control-label">Link</label><?php $display = displayErrors($error, 'link');
echo $display ?> <input class="form-control input-md" name="link" placeholder="Enter Project link"  type="text">
</div>

<div class="form-group mb30">
<label class="control-label" for="textarea">ABOUT</label>
<?php $display = displayErrors($error, 'about');
echo $display ?>
<textarea class="form-control" id="textarea" name="about" placeholder="Write your article here" rows="4"></textarea>

<h2 class="title-2">Add Project Image</h2>
<div class="form-group">
  <?php $display = displayErrors($error, 'about');
  echo $display ?>
<input class="file" id="featured-img" type="file" name="upload"><br>
</div>
<input type="submit" class="btn btn-common" name="submit" value="Submit">

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
