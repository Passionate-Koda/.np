<?php
ob_start();
session_start();
include("include/link_include.php");
include("include/authentication.php");
include("include/levelcheck.php");
authenticate();
if(isset($_SESSION['id'])){
  $session = $_SESSION['id'];
}
$info = adminInfo($conn,$session);
extract($info);
$fname = ucwords($firstname);
$lname = ucwords($lastname);

$edit_info = getEditInfo($conn,$_GET['id'],'news');








$error= [];

if(array_key_exists('submit', $_POST)){


  if(empty($_POST['title'])){
    $error['title']="Enter a Title";
  }

  if(empty($_POST['link'])){
    $error['link']="Enter a Link";
  }

  if(empty($_POST['body'])){
    $error['body']="Enter a body";
  }


  if(empty($error)){
    $clean = array_map('trim', $_POST);
    editNews($conn, $clean,$_GET['id']);
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
  <p>Thank you '.ucwords($firstname).', Philanthrophy Circuit is happy to have you around. </p>
  </div>
  </div>
  </div>';
  } ?>
<div class="col-sm-12 col-md-10 col-md-offset-1">
<div class="page-ads box">
<h2 class="title-2">Welcome to the News page</h2>
<div class="row search-bar mb30 red-bg">
<div class="advanced-search">
<form class="search-form" method="get">
<div class="col-md-4 col-sm-12 search-col">
<h3>Please post your News.</h3>
</div>
</form>
</div>
</div>
<form class="form-ad" action="" method="post" enctype="multipart/form-data">
<div class="form-group mb30">
<label class="control-label">News Title</label><?php $display = displayErrors($error, 'headline');
echo $display ?> <input class="form-control input-md" name="title" placeholder="Write a suitable Headline for your news" value="<?php echo $edit_info['headline']      ?>"  type="text">
</div>
<div class="form-group mb30">
<label class="control-label">Link</label><?php $display = displayErrors($error, 'author');
echo $display ?> <input class="form-control input-md" name="link" placeholder="Enter your news link" value="<?php echo $edit_info['link']      ?>"  type="text">

<div class="form-group mb30">
<label class="control-label" for="textarea">Body</label>
<?php $display = displayErrors($error, 'body');
echo $display ?>
<textarea class="form-control"  id="editor" name="body" placeholder="Write your body of your news here" rows="4"><?php echo $edit_info['body']      ?></textarea>
</div>

  <br/>

<div class="form-group">
<input type="submit" class="btn btn-common" name="submit" value="Edit">
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
      editor.setData( '<?php echo $edit_info['body']; ?>' )
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
