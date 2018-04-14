<?php
$page_title = "Articles - New.Mckodev";
$page_name = "article";
include("include/header.php");

?>
<!-- BEGIN .content -->
<script>(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) return;
 js = d.createElement(s); js.id = id;
 js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="content">

  <!-- BEGIN .wrapper -->
  <div class="wrapper">

    <div class="content-wrapper">

      <!-- BEGIN .composs-main-content -->
      <div class="composs-main-content composs-main-content-s-1">

        <!-- BEGIN .composs-panel -->
        <div class="composs-panel">

          <div class="composs-panel-title">
            <strong>Articles</strong>
          </div>

          <div class="composs-panel-inner">

            <div class="composs-blog-list lets-do-1">
                <?php
                $vis = "Show";
                $page = 1;
                $perPage = 10;


                if(isset($_GET['p'])){
                  $page = $_GET['p'];
                }

                $offset  = ($page - 1 ) * $perPage;

                $statement = $conn->prepare("SELECT * FROM blog WHERE visibility = :sh");

                $statement->bindParam(":sh", $vis);
                $statement->execute();
                $count = $statement->rowCount();
                $totalPages = ceil($count/$perPage);
                ?>




                <?php


                getPaginatedArticle($conn,$offset,$perPage) ?>



            </div>

          </div>

          <div class="composs-panel-pager">
            <p><?php echo $page ?> of <?php echo $totalPages ?>pages</p>

            <?php if(isset($_GET['p'])){
              if($_GET['p'] >= 2){
                $prev = $_GET['p'] - 1;
                echo '<a class="prev page-numbers" href="articles?p='.$prev.'"><i class="fa fa-angle-double-left"></i>Previous</a>';
              }elseif($_GET['p'] == 2){
                echo '<a class="prev page-numbers" href="articles"><i class="fa fa-angle-double-left"></i>Previous</a>';
              }

            }
            $finalPage = 1;
            if(isset($_GET['p'])){
              $finalPage = $_GET['p'];
            }


            if($totalPages > 1 && $totalPages !=$finalPage ){
              if(isset($_GET['p'])){
                $next = $_GET['p'] + 1;
                echo '<a class="next page-numbers" href="articles?p='.$next.'">Next<i class="fa fa-angle-double-right"></i></a>';
              }else{
                $next = $page + 1;
                echo '<a class="next page-numbers" href="articles?p='.$next.'">Next<i class="fa fa-angle-double-right"></i></a>';
              }
            }



            ?>
          </div>



          <!-- END .composs-panel -->
        </div>

        <!-- END .composs-main-content -->
      </div>
      <!-- BEGIN #sidebar -->
      <aside id="sidebar">

        <!-- BEGIN .widget -->

        <div class="widget">
          <h3>Latest Reports</h3>
          <div class="widget-content ot-w-article-list">
            <?php getReportPreview($conn) ?>
<!--
            <div class="item">
              <div class="item-header">
                <a href="#" class="img-read-later-button rm-btn-small">Read later</a>
                <a href="post.html"><img src="images/photos/image-17.jpg" alt="" /></a>
              </div>
              <div class="item-content">
                <h4><a href="post.html">3 Generations Of Young Skywalkers Is The Path To So Many Feels</a></h4>
                <span class="item-meta">
                  <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                </span>
              </div>
            </div> -->

            <!-- <div class="item">
            <div class="item-header">
            <a href="#" class="img-read-later-button rm-btn-small">Read later</a>
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
    <a href="#" class="img-read-later-button rm-btn-small">Read later</a>
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
<a href="#" class="img-read-later-button rm-btn-small">Read later</a>
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
<div class="widget">
  <div class="widget-content">
    <a href="#" target="_blank"><img src="images/o2.jpg" alt="" /></a>
  </div>
  <!-- END .widget -->
</div>

<!-- BEGIN .widget -->



<!-- BEGIN .widget -->
<div class="widget">
  <h3>UPCOMING EVENTS</h3>
  <div class="widget-content ot-w-comments-list">

    <?php getPreviewEvent($conn) ?>

  </div>
  <!-- END .widget -->
</div>
<!-- BEGIN .widget -->


<!-- END #sidebar -->
</aside>

</div>

<!-- END .wrapper -->
</div>

<!-- BEGIN .content -->
</div>

<?php #
include("include/footer.php");
?>
