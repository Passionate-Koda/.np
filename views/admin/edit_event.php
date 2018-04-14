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

$edit_info = getEditInfo($conn,$_GET['id'],'event');









$error= [];

if(array_key_exists('submit', $_POST)){


  if(empty($_POST['name'])){
    $error['title']="Enter a Title";
  }

  if(empty($_POST['start_date'])){
    $error['start_date']="input Field";
  }
  if(empty($_POST['end_date'])){
    $error['end_date']="input Field";
  }

  if(empty($_POST['about'])){
    $error['about']="input Field";
  }
  if(empty($_POST['about'])){
    $error['venue']="input Field";
  }


  if(empty($error)){
    $clean = array_map('trim', $_POST);
    editEvent($conn, $clean,$_GET['id']);
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
  <p>Thank you '.ucwords($firstname).', Mckodev is happy to have you around. </p>
  </div>
  </div>
  </div>';
  } ?>
<div class="col-sm-12 col-md-10 col-md-offset-1">
<div class="page-ads box">
<h2 class="title-2">Welcome to Edit page</h2>
<div class="row search-bar mb30 red-bg">
<div class="advanced-search">
<form class="search-form" method="get">
<div class="col-md-4 col-sm-12 search-col">
<h3>Please post your article.</h3>
</div>
</form>
</div>
</div>
<form class="form-ad" action="" method="post" enctype="multipart/form-data">
<div class="form-group mb30">
<label class="control-label">Name</label><?php $display = displayErrors($error, 'name');
echo $display ?> <input class="form-control input-md" name="name" placeholder="Write a suitable title for your Event" value="<?php echo $edit_info['name']   ?>"  type="text">
</div>
<div class="form-group mb30">
<label class="control-label">Venue</label><?php $display = displayErrors($error, 'venue');
echo $display ?> <input class="form-control input-md" name="venue" placeholder="Event venue" value="<?php echo $edit_info['venue']   ?>"  type="text">
<label class="control-label">Start Date</label><?php $display = displayErrors($error, 'start_date');
echo $display ?> <input class="form-control input-md" name="start_date" placeholder="Start Date" value="<?php echo $edit_info['start_date']  ?>"  type="date">
<label class="control-label">End Date</label><?php $display = displayErrors($error, 'end_date');
echo $display ?> <input class="form-control input-md" name="end_date" placeholder="End Date" value="<?php echo $edit_info['end_date']  ?>"  type="date">

<div class="form-group mb30">
<label class="control-label" for="textarea">About Event</label>
<?php $display = displayErrors($error, 'about');
echo $display ?>
<textarea class="form-control"  id="editor" name="about" placeholder="Write about the Event here" rows="4"></textarea>
</div>

  <br/>


<br/>
<br/>
<br/>

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
      editor.setData( '<?php echo $edit_info['about']; ?>' )
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
