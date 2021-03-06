<?php
$page_title = "Events - BoardSpeck";
$page_name = "event";
include("include/header.php");

?>
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
            <strong>Events</strong>
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

$statement = $conn->prepare("SELECT * FROM report WHERE visibility = :sh");

$statement->bindParam(":sh", $vis);
$statement->execute();
$count = $statement->rowCount();
$totalPages = ceil($count/$perPage);
?>

<?php


getPaginatedEvent($conn,$offset,$perPage) ?>

</div>

</div>

<div class="composs-panel-pager">
  <p><?php echo $page ?> of <?php echo $totalPages ?>pages</p>

  <?php if(isset($_GET['p'])){
    if($_GET['p'] >= 2){
      $prev = $_GET['p'] - 1;
      echo '<a class="prev page-numbers" href="event?p='.$prev.'"><i class="fa fa-angle-double-left"></i>Previous</a>';
    }elseif($_GET['p'] == 2){
      echo '<a class="prev page-numbers" href="event"><i class="fa fa-angle-double-left"></i>Previous</a>';
    }

  }
  $finalPage = 1;
  if(isset($_GET['p'])){
    $finalPage = $_GET['p'];
  }


  if($totalPages > 1 && $totalPages !=$finalPage ){
    if(isset($_GET['p'])){
      $next = $_GET['p'] + 1;
      echo '<a class="next page-numbers" href="event?p='.$next.'">Next<i class="fa fa-angle-double-right"></i></a>';
    }else{
      $next = $page + 1;
      echo '<a class="next page-numbers" href="event?p='.$next.'">Next<i class="fa fa-angle-double-right"></i></a>';
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


  <!-- BEGIN .widget -->


  <!-- BEGIN .widget -->


  <!-- BEGIN .widget -->
  <div class="widget">
    <h3>Latest articles</h3>
    <div class="widget-content ot-w-article-list">

      <?php getArticlePreview($conn); ?>

    </div>
    <!-- END .widget -->
  </div>


  <div class="widget">
    <div class="widget-content">
      <a href="#" target="_blank"><img src="images/o2.jpg" alt="" /></a>
    </div>
    <!-- END .widget -->
  </div>

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

<?php
include("include/footer.php");
?>
