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

$check2 = adminFullInfo($conn,$_SESSION['id']);
// die(var_dump($check2['portfolio']));
if($check2['portfolio'] !=555666777888999000){
  setLogout($conn,$_SESSION['id']);
  session_destroy();
  $success = "Your Account Cannot View Users";
  $succ = preg_replace('/\s+/', '_', $success);
  header("Location: adminLogin?ssp=$succ");
}

$info = adminInfo($conn,$session);
extract($info);
$fname = ucwords($firstname);
$lname = ucwords($lastname);
 ?>


<div id="content">
<div class="container">
<div class="row">
<!-- <div class="col-sm-3 page-sideabr">
<aside>

<div class="inner-box">
<div class="widget-title">
<h4>Advertisement</h4>
</div>
<img src="assets/img/img1.jpg" alt="">
</div>
</aside>
</div> -->
<div class="col-sm-9 page-content" style="width:100%;overflow-x:scroll; ">

<h2 class="title-2"><i class="fa fa-star-o"></i>Users Details</h2>
<br>
<div class="table-responsive">
<table class="table table-striped table-bordered add-manage-table">
  <tr>

    <th>Login Details</th>
    <th>Level & Status</th>
    <th>Set Level</th>
    <th>Delete</th>
    <th>Suspend</th>
  </tr>
<tbody>
<tr>
  <?php getAdmin($conn); ?>

<!-- </tr>
<tr>
<td class="add-img-td">
<a href="ads-details.html">
<img class="img-responsive" src="assets/img/item/img-2.jpg" alt="img">
</a>
</td>
<td class="ads-details-td">
<h4><a href="ads-details.html">Sony Xperia dual sim 100% brand new iPad</a></h4>
<p> <strong> Posted On </strong>:
02-Oct-2017, 04:38 PM </p>
<p> <strong>Visitors </strong>: 221 <strong>Located In:</strong> New York </p>
</td>
<td class="price-td">
  <a href="#">
   <button class="btn btn-common" type="submit">View Project</button>
  </a>
</td>
</tr> -->
<!-- <tr>
<td class="add-img-td">
<a href="ads-details.html">
<img class="img-responsive" src="assets/img/item/img-3.jpg" alt="img">
</a>
</td>
<td class="ads-details-td">
<h4><a href="ads-details.html">Digital Cameras brand new</a></h4>
<p> <strong> Posted On </strong>:
02-Oct-2017, 04:38 PM </p>
<p> <strong>Visitors </strong>: 221 <strong>Located In:</strong> New York </p>
</td>
<td class="price-td">
  <a href="#">
   <button class="btn btn-common" type="submit">View Project</button>
  </a>
</td>
</tr>
<tr>
<td class="add-img-td">
<a href="ads-details.html">
<img class="img-responsive" src="assets/img/item/img-4.jpg" alt="img">
</a>
</td>
<td class="ads-details-td">
<h4><a href="ads-details.html">Samsung Galaxy dual sim 100% brand new</a></h4>
<p> <strong> Posted On </strong>:
02-Oct-2017, 04:38 PM </p>
<p> <strong>Visitors </strong>: 221 <strong>Located In:</strong> New York </p>
 </td>
<td class="price-td">
  <a href="#">
   <button class="btn btn-common" type="submit">View Project</button>
  </a>
</td>
</tr>
<tr>
<td class="add-img-td">
<a href="ads-details.html">
<img class="img-responsive" src="assets/img/item/img-5.jpg" alt="img">
</a>
</td>
<td class="ads-details-td">
<h4><a href="ads-details.html">Brand New Macbook Pro</a></h4>
<p><strong> Posted On </strong>: <span>02-Oct-2017, 04:38 PM </span></p>
<p><strong>Visitors</strong>: <span>221</span> <strong>Located In:</strong> <span>New York</span></p>
</td>
<td class="price-td">
  <a href="#">
   <button class="btn btn-common" type="submit">View Project</button>
  </a>
</td>
</tr> -->

</tbody>
</table>
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
