<?php
ob_start();
session_start();
include("include/authentication.php");
include("include/link_include.php");
include("include/levelcheck.php");
include("include/student_limit.php");
include("include/level1_limit.php");
$level = adminLevel($conn, $_SESSION['id']);


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
  $ext = ["image/jpg", "image/JPG", "image/jpeg", "image/JPEG", "image/png", "image/PNG"];
  if(empty($_FILES['upload']['name'])){
    $error['upload'] = "Please choose file";
  }

  if(empty($_POST['title'])){
    $error['title']="Enter a Title";
  }

  if(empty($_POST['category'])){
    $error['category']="Enter a Category";
  }

  if(empty($_POST['body'])){
    $error['body']="Enter a body";
  }
  if(empty($_POST['visibility'])){
    $error['visibility']="Enter a Visibility";
  }

  if(empty($error)){
    $ver['a'] = compressImage($_FILES,'upload',50, 'uploads/' );

    $clean = array_map('trim', $_POST);
    addInsight($conn, $clean,$ver,$hash_id);
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
  <p>Thank you '.ucwords($firstname).', Mckodev  is happy to have you around. </p>
  </div>
  </div>
  </div>';
  } ?>
<div class="col-sm-12 col-md-10 col-md-offset-1">
<div class="page-ads box">
<h2 class="title-2">Welcome to the Insight page</h2>
<div class="row search-bar mb30 red-bg">
<div class="advanced-search">
<form class="search-form" method="get">
<div class="col-md-4 col-sm-12 search-col">
<h3>Please post your insight.</h3>
</div>
</form>
</div>
</div>
<form class="form-ad" action="" method="post" enctype="multipart/form-data">
<div class="form-group mb30">
<label class="control-label">INSIGHT TITLE</label><?php $display = displayErrors($error, 'title');
echo $display ?> <input class="form-control input-md" name="title" placeholder="Write a suitable title for your insight"  type="text">
</div>
<div class="form-group mb30">


<div class="form-group mb30">
<label class="control-label" for="textarea">BODY</label>
<?php $display = displayErrors($error, 'body');
echo $display ?>
<textarea class="form-control" id="editor" name="body" placeholder="Write your insight here" rows="4"></textarea>
</div>

  <br/>
  <div class="col-md-4 col-sm-4 col-xs-12 search-bar search-bar-nostyle">
<div class="input-group-addon search-category-container">

<label class="control-labell">VISIBILITY </label>  <?php $display = displayErrors($error, 'visibility');
  echo $display ?><br><select class="dropdown-product selectpicker" name="visibility" >
<option value="hide">
--Admin Decision--
</option>


</select>
<br>
<br>
<br>


<label class="control-labell">CATEGORY </label>  <?php $display = displayErrors($error, 'category');
  echo $display ?><br><select required class="selectpicker" name="category">
<option value="">
--Select--
</option>

<?php getPackageName($conn); ?>
</select>



</div>
</div>

<br/>
<br/>
<br/>
<br>
<br>
<br>
<br>
<h2 class="title-2">Add Image here</h2>
<div class="form-group">
<label class="control-label">Add images</label>
<?php $display = displayErrors($error, 'upload');
  echo $display ?> <br>
 <input class="file" id="featured-img" type="file" name="upload"><br>
<br>
<input type="submit" class="btn btn-common" name="submit" value="Add">
</form>
</div>
</div>
</div>
</div>

</section>

<a class="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> -->


<script>
  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
      console.log( editor );
    } )
    .catch( error => {
      console.error( error );
    } );
</script>
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
