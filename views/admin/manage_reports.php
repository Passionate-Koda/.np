<?php
ob_start();
session_start();
include("include/link_include.php");
include("include/authentication.php");
include("include/levelcheck.php");
include("include/student_limit.php");
authenticate();
if(isset($_SESSION['id'])){
  $session = $_SESSION['id'];
}
$info = adminInfo($conn,$session);
extract($info);
$fname = ucwords($firstname);
$lname = ucwords($lastname);
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
  <p>Thank you '.ucwords($firstname).', BoardSpeck is happy to have you around. </p>
  </div>
  </div>
  </div>';
  } ?>


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

<h2 class="title-2"><i class="fa fa-star-o"></i> Manage Content</h2>
<br>
<div class="table-responsive">
<table class="table table-striped table-bordered add-manage-table">
  <tr>
    <th>Report Info</th>
    <th>Body</th>
    <th>Created By</th>
    <th>Date Uploaded</th>
    <th>Visibility</th>
    <th>Edit</th>
    <th>Delete</th>
    <th>Set Visibility</th>
  </tr>
<tbody>

<?php getResource($conn,'report',$_SESSION['id']); ?>
<!-- <td class="">
<h4><a href="">Name</a></h4>
<p> <strong> Link </strong>:
BoardSpeck.com </p>
</td>
<td class="ads-details-td">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
</td>
<td class="add-img-td">
<a href="">
<img class="img-responsive" src="assets/img/item/img-1.jpg" alt="img">
</a>
</td>
<td class="add-img-td">
her
</td>
<td class="add-img-td">
her
</td>

<td class="ads-details-td">
  <a href="#"><button class="btn btn-common btn-sm" type="submit">Edit</button></a>
</td>
<td class="price-td">
  <a href="#">
   <button class="btn btn-danger btn-sm" type="submit">Delete</button>
  </a>
</td>
<td class="price-td">
  <a href="#">
   <button class="btn btn-success btn-sm" type="submit">Show</button>
  </a>
  <a href="#">
   <button class="btn btn-basic btn-sm" type="submit">Hide</button>
  </a>
</td> -->

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
