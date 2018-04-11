<?php
ob_start();
$page_title = "Home - Philanthropy Circuit";
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
            <strong>Insights</strong>
          </div>

          <div class="composs-panel-inner">

            <div class="composs-blog-list lets-do-1">

              <?php getPreviewInsightsPost($conn); ?>

              <!-- <div class="item">
                <div class="item-header">
                  <a href="#" class="img-read-later-button">Read</a>
                  <a href="post.html"><img src="images/photos/image-11.jpg" alt="" /></a>
                </div>
                <div class="item-content">
                  <h2><a href="post.html">4 Shocking Things From Civil War That You Won't See in the Movie</a></h2>
                  <span class="item-meta">
                    <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                    <a href="post.html#comments" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                  </span>
                  <p>With the recent trailers and more plot points about Captain America: Civil War being made known, it is becoming more and more likely that Civil War is going to be a different...</p>
                </div>
              </div>

              <div class="item">
                <div class="item-header">
                  <a href="#" class="img-read-later-button">Read</a>
                  <a href="post.html"><img src="images/photos/image-12.jpg" alt="" /></a>
                </div>
                <div class="item-content">
                  <h2><a href="post.html">Horror Icon Angus Scrimm Passes Away; The Tall Man Remains Immortal</a></h2>
                  <span class="item-meta">
                    <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                    <a href="post.html#comments" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                  </span>
                  <p>Angus Scrimm passed away on Saturday at the age of 89. He was best known for portraying The Tall Man in one of my favorite cult horror movie series of all-time...</p>
                </div>
              </div>

              <div class="item">
                <div class="item-header">
                  <a href="#" class="img-read-later-button">Read</a>
                  <a href="post.html"><img src="images/photos/image-13.jpg" alt="" /></a>
                </div>
                <div class="item-content">
                  <h2><a href="post.html">We Almost Saw David Bowie In The Marvel Cinematic Universe</a></h2>
                  <span class="item-meta">
                    <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                    <a href="post.html#comments" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                  </span>
                  <p>As far as hammer blows to the cultural brain stem go, the death of David Bowie on January 10 was particularly brutal. One of the very few true icons of popular culture...</p>
                </div>
              </div>

              <div class="item">
                <div class="item-header">
                  <a href="#" class="img-read-later-button">Read</a>
                  <a href="post.html"><img src="images/photos/image-14.jpg" alt="" /></a>
                </div>
                <div class="item-content">
                  <h2><a href="post.html">Horror Icon Angus Scrimm Passes Away; The Tall Man Remains Immortal</a></h2>
                  <span class="item-meta">
                    <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                    <a href="post.html#comments" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                  </span>
                  <p>Angus Scrimm passed away on Saturday at the age of 89. He was best known for portraying The Tall Man in one of my favorite cult horror movie series of all-time...</p>
                </div>
              </div>

              <div class="item">
                <div class="item-header">
                  <a href="#" class="img-read-later-button">Read</a>
                  <a href="post.html"><img src="images/photos/image-15.jpg" alt="" /></a>
                </div>
                <div class="item-content">
                  <h2><a href="post.html">We Almost Saw David Bowie In The Marvel Cinematic Universe</a></h2>
                  <span class="item-meta">
                    <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                    <a href="post.html#comments" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                  </span>
                  <p>As far as hammer blows to the cultural brain stem go, the death of David Bowie on January 10 was particularly brutal. One of the very few true icons of popular culture...</p>
                </div>
              </div>

              <div class="item">
                <div class="item-header">
                  <a href="#" class="img-read-later-button">Read</a>
                  <a href="post.html"><img src="images/photos/image-16.jpg" alt="" /></a>
                </div>
                <div class="item-content">
                  <h2><a href="post.html">Did You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                  <span class="item-meta">
                    <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                    <a href="post.html#comments" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                  </span>
                  <p>As far as hammer blows to the cultural brain stem go, the death of David Bowie on January 10 was particularly brutal. One of the very few true icons of popular culture...</p>
                </div>
              </div> -->

            </div>

          </div>
          <div class="composs-panel-pager">
            <a href="insight" class="composs-pager-button">View more Insights</a>
          </div>



          <!-- END .composs-panel -->
        </div>

        <!-- END .composs-main-content -->
      </div>

      <!-- BEGIN #sidebar -->
      <aside id="sidebar">

        <!-- BEGIN .widget -->
        <div class="widget">
          <h3>UPCOMING PHILANTROPHY EVENTS</h3>
          <div class="widget-content ot-w-comments-list">
            <?php getPreviewEvent($conn) ?>
            <!-- <div class="item">
              <div class="item-header">
                <a href="event.php"><img src="images/photos/avatar-2.jpg" alt="" /></a>
              </div>
              <div class="item-content">
                <h4><a href="event.php">Orange Themes</a></h4>
                <p>Cum an officiis integebat neces sitat bus, impedi tes...</p>
                <span class="item-meta">
                  <a href="event.php" class="item-meta-item meta-button">View article <i class="fa fa-caret-right"></i></a>
                </span>
              </div>
            </div>

            <div class="item">
              <div class="item-header">
                <img src="images/no-avatar-50.jpg" alt="" />
              </div>
              <div class="item-content">
                <h4><a href="event.php">Leesa Valarie</a></h4>
                <p>Cum an officiis integebat neces sitat bus, impedi tes...</p>
                <span class="item-meta">
                  <a href="event.php" class="item-meta-item meta-button">View article <i class="fa fa-caret-right"></i></a>
                </span>
              </div>
            </div>

            <div class="item">
              <div class="item-header">
                <a href="#"><img src="images/photos/avatar-2.jpg" alt="" /></a>
              </div>
              <div class="item-content">
                <h4><a href="event.php">Orange Themes</a></h4>
                <p>Cum an officiis integebat neces sitat bus, impedi tes...</p>
                <span class="item-meta">
                  <a href="event.php" class="item-meta-item meta-button">View article <i class="fa fa-caret-right"></i></a>
                </span>
              </div>
            </div> -->

          </div>
          <!-- END .widget -->
        </div>


        <!-- BEGIN .widget -->


        <!-- BEGIN .widget -->


        <!-- BEGIN .widget -->
        <div class="widget">
          <div class="widget-content">
            <a href="#" target="_blank"><img src="images/o2.jpg" alt="" /></a>
          </div>
          <!-- END .widget -->
        </div>

        <!-- BEGIN .widget -->
        <div class="widget">
          <h3>Latest Articles</h3>
          <div class="widget-content ot-w-article-list">
            <?php getArticlePreview($conn) ?>
            <!-- <div class="item">
              <div class="item-header">
                <a href="#" class="img-read-later-button rm-btn-small">Read</a>
                <a href="post.html"><img src="images/photos/image-17.jpg" alt="" /></a>
              </div>
              <div class="item-content">
                <h4><a href="post.html">3 Generations Of Young Skywalkers Is The Path To So Many Feels</a></h4>
                <span class="item-meta">
                  <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                </span>
              </div>
            </div>

            <div class="item">
              <div class="item-header">
                <a href="#" class="img-read-later-button rm-btn-small">Read</a>
                <a href="post.html"><img src="images/photos/image-18.jpg" alt="" /></a>
              </div>
              <div class="item-content">
                <h4><a href="post.html">Meet DC's Legends of Tomorrow: Vandal Savage</a></h4>
                <span class="item-meta">
                  <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                </span>
              </div>
            </div>

            <div class="item">
              <div class="item-header">
                <a href="#" class="img-read-later-button rm-btn-small">Read</a>
                <a href="post.html"><img src="images/photos/image-19.jpg" alt="" /></a>
              </div>
              <div class="item-content">
                <h4><a href="post.html">YOU DECIDE: The Best Movie of 2015 - Final Four!</a></h4>
                <span class="item-meta">
                  <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                </span>
              </div>
            </div>

            <div class="item">
              <div class="item-header">
                <a href="#" class="img-read-later-button rm-btn-small">Read</a>
                <a href="post.html"><img src="images/photos/image-20.jpg" alt="" /></a>
              </div>
              <div class="item-content">
                <h4><a href="post.html">How Our Favorite Disney Characters Would look In Classic Paintings</a></h4>
                <span class="item-meta">
                  <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                </span>
              </div>
            </div> -->

          </div>
          <!-- END .widget -->
        </div>


        <!-- BEGIN .widget -->

        <!-- BEGIN .widget -->


        <!-- BEGIN .widget -->


        <!-- END #sidebar -->
      </aside>

    </div>

    <!-- END .wrapper -->
  </div>
  <!-- BEGIN .content -->
</div>
<?php

include("include/footer.php");
?>
