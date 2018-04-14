<?php
ob_start();
session_start();
include("include/link_include.php");
include("include/authentication.php");
include("include/levelcheck.php");
include("include/student_limit.php");
include("include/level1_limit.php");
include("include/level2_limit.php");
authenticate();
if(isset($_SESSION['id'])){
  $session = $_SESSION['id'];
}
$info = adminInfo($conn,$session);
extract($info);
$fname = ucwords($firstname);
$lname = ucwords($lastname);
$info = adminFullInfo($conn,$_GET['id']);


if(array_key_exists("submit", $_POST)){
  setLevel($conn,$_POST['level'],$_GET['id']);
}



 ?>


<div id="content">
<div class="container">
<div class="row">
  <?php if (isset($_GET['success'])){
  $msg = str_replace('_', ' ', $_GET['success']);

    echo '<div class="col-md-12">
  <div class="inner-box posting">
  <div class="alert alert-success alert-lg" role="alert">
  <h2 class="postin-title">✔ Successful! '.$msg.' </h2>
  <p>Thank you '.ucwords($firstname).', Mckodev is happy to have you around. </p>
  </div>
  </div>
  </div>';
  } ?>
   <br>
   <br>

   <div class="col-sm-12 col-md-10 col-md-offset-1">
   <div class="page-ads box">
   <h2 class="title-2">Welcome to the Article page</h2>
   <div class="row search-bar mb30 ">
   <div class="advanced-search">
   <form class="search-form" method="get">
   <div class="col-md-4 col-sm-12 search-col">
   <h3>Set Level For user:<br>
     "<?php echo ucwords($info['firstname']).' '.ucwords($info['lastname']) ?>"</h3>
   </div>
   </form>
   </div>
   </div>

   <form class="form-ad" method="post" action="">
   <div class="form-group mb30">


   <label class="control-label">Select level</label><br>

   <div class="col-md-4 col-sm-4 col-xs-12 search-bar search-bar-nostyle">

   <div class="input-group-addon search-category-container">

   <label class="control-label"> <select class="dropdown-product selectpicker" required name="level">
   <option value="">
   --SELECT--
   </option>
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option value="4">4</option>

   </select>
   <br/>
   <br/>
   </div>
   </div>

   <input class="btn btn-common" type="submit" name="submit" value="SET">

   </form>


   </div>
   </div>
   </div>
   </div>

</div>
</div>



<script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/material.min.js"></script>
<script type="text/javascript" src="assets/js/material-kit.js"></script>
<script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/wow.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="assets/js/contact-form-script.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/classix-template/account-saved-search.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:42:23 GMT -->
</html>
