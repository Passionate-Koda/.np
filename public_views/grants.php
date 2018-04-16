<?php
ob_start();
$page_title = "Trainings - New.Mckodev";
$page_name = "training";
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
            <strong>Trainings</strong>
          </div>

          <div class="composs-panel-inner">

            <div class="composs-blog-list lets-do-1">


<?php
$vis = "Show";
$page = 1;
$perPage = 2;


if(isset($_GET['p'])){
  $page = $_GET['p'];
}

$offset  = ($page - 1 ) * $perPage;

$statement = $conn->prepare("SELECT * FROM grants WHERE visibility = :sh");

$statement->bindParam(":sh", $vis);
$statement->execute();
$count = $statement->rowCount();
$totalPages = ceil($count/$perPage);
?>




<?php


getPaginatedGrant($conn,$offset,$perPage) ?>

</div>

</div>

<div class="composs-panel-pager">
  <p><?php echo $page ?> of <?php echo $totalPages ?>pages</p>

  <?php if(isset($_GET['p'])){
    if($_GET['p'] >= 2){
      $prev = $_GET['p'] - 1;
      echo '<a class="prev page-numbers" href="trainings?p='.$prev.'"><i class="fa fa-angle-double-left"></i>Previous</a>';
    }elseif($_GET['p'] == 2){
      echo '<a class="prev page-numbers" href="trainings"><i class="fa fa-angle-double-left"></i>Previous</a>';
    }

  }
  $finalPage = 1;
  if(isset($_GET['p'])){
    $finalPage = $_GET['p'];
  }


  if($totalPages > 1 && $totalPages !=$finalPage ){
    if(isset($_GET['p'])){
      $next = $_GET['p'] + 1;
      echo '<a class="next page-numbers" href="trainings?p='.$next.'">Next<i class="fa fa-angle-double-right"></i></a>';
    }else{
      $next = $page + 1;
      echo '<a class="next page-numbers" href="trainings?p='.$next.'">Next<i class="fa fa-angle-double-right"></i></a>';
    }
  }
  ?>
</div>
</div>
</div>
  <?php include 'include/event_aside.php' ?>

</div>

<!-- END .wrapper -->
</div>

<!-- BEGIN .content -->
</div>

<?php
include("include/footer.php");
?>
