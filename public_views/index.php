<?php
ob_start();
$page_title = "Home - BoardSpeck";
$page_name = "home";
include ("include/header.php");

?>

<!-- BEGIN .main-slider -->
<div class="main-slider">

  <!-- BEGIN .wrapper -->
  <div class="wrapper">

    <div class="main-slider-owl">
      <?php getPreviewInsight($conn) ?>
      <!-- <div class="item">
        <a href="post.html" class="main-slider-owl-title">Fusce porttitor porta ante dicta legimus noluisse</a>
        <a href="blog.html" class="main-slider-owl-calendar"><strong><i class="material-icons">access_time</i>December 12, 2015</strong></a>
        <img src="images/photos/image-1.jpg" alt="" />
      </div>
      <div class="item">
        <a href="post.html" class="main-slider-owl-title">Fusce porttitor porta ante dicta legimus noluisse</a>
        <a href="blog.html" class="main-slider-owl-calendar"><strong><i class="material-icons">access_time</i>December 12, 2015</strong></a>
        <img src="images/photos/image-23.jpg" alt="" />
      </div>
      <div class="item">
        <a href="post.html" class="main-slider-owl-title">Fusce porttitor porta ante dicta legimus noluisse</a>
        <a href="blog.html" class="main-slider-owl-calendar"><strong><i class="material-icons">access_time</i>December 12, 2015</strong></a>
        <img src="images/photos/image-24.jpg" alt="" />
      </div>
      <div class="item">
        <a href="post.html" class="main-slider-owl-title">Fusce porttitor porta ante dicta legimus noluisse</a>
        <a href="blog.html" class="main-slider-owl-calendar"><strong><i class="material-icons">access_time</i>December 12, 2015</strong></a>
        <img src="images/photos/image-25.jpg" alt="" />
      </div>
      <div class="item">
        <a href="post.html" class="main-slider-owl-title">Fusce porttitor porta ante dicta legimus noluisse</a>
        <a href="blog.html" class="main-slider-owl-calendar"><strong><i class="material-icons">access_time</i>December 12, 2015</strong></a>
        <img src="images/photos/image-24.jpg" alt="" />
      </div>
      <div class="item">
        <a href="post.html" class="main-slider-owl-title">Fusce porttitor porta ante dicta legimus noluisse</a>
        <a href="blog.html" class="main-slider-owl-calendar"><strong><i class="material-icons">access_time</i>December 12, 2015</strong></a>
        <img src="images/photos/image-25.jpg" alt="" />
      </div> -->
    </div>

    <!-- END .wrapper -->
  </div>

  <!-- BEGIN .main-slider -->
</div>


<!-- BEGIN .content -->
<div class="content">

  <!-- BEGIN .wrapper -->
  <div class="wrapper">

    <div class="content-wrapper">

      <!-- BEGIN .composs-main-content -->
      <div class="composs-main-content composs-main-content-s-1">


        <!-- BEGIN .composs-panel -->
        <div class="composs-panel">

          <div class="composs-panel-title">
            <strong>News</strong>
          </div>

          <div class="composs-panel-inner">

            <div class="composs-blog-list lets-do-1">

              <?php getPreviewInsightsPost($conn); ?>



            </div>

          </div>
          <div class="composs-panel-pager">
            <a href="news" class="composs-pager-button">View more News</a>
          </div>



          <!-- END .composs-panel -->
        </div>

        <!-- END .composs-main-content -->
      </div>

      <!-- BEGIN #sidebar -->
<?php include 'include/insight_aside.php' ?>

    </div>

    <!-- END .wrapper -->
  </div>
  <!-- BEGIN .content -->
</div>
<?php

include("include/footer.php");
?>
