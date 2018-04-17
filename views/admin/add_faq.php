<?php
ob_start();
session_start();
include("include/link_include.php");
include("include/authentication.php");
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

  if(empty($_POST['question'])){
    $error['question']="Enter a Question";
  }

  if(empty($_POST['answer'])){
    $error['answer']="Enter a Answer";
  }
  if(empty($error)){
    $clean = array_map('trim', $_POST);
    addFaq($conn, $clean,$hash_id);
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
<h2 class="title-2">Welcome to the FAQ Page</h2>
<div class="row search-bar mb30 blue">
<div class="advanced-search">

<div class="col-md-4 col-sm-12 search-col">
<h3>Please add and answer FAQ </h3>
</div>

</div>
</div>
<form class="form-ad" action="" method="post">
<div class="form-group mb30">
<label class="control-label">FAQ Questions</label><?php $display = displayErrors($error, 'question');
echo $display ?> <input class="form-control input-md" name="question" placeholder="Enter a FAQ"  type="text">
</div>

<div class="form-group mb30">
<label class="control-label" for="textarea">FAQ Answer</label><?php $display = displayErrors($error, 'answer');
echo $display ?>
<textarea class="form-control" id="textarea" name="answer" placeholder="Answer a FAQ" rows="4"></textarea>

<input class="btn btn-common" type="submit" name="submit" value="Submit">
</form>

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
