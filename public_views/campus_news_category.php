<?php
$page_title = "Features - New.Mckodev";
$page_name = "Features";
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
            <strong><?php $categ = getEntityCategory($conn,'campus','campus_name',$_GET['c']); echo $categ['campus_name']; ?> News</strong>
          </div>

          <div class="composs-panel-inner">

            <div class="composs-blog-list lets-do-1">


<?php
$vis = "show";
$page = 1;
$perPage = 1;


if(isset($_GET['p'])){
  $page = $_GET['p'];
}

$offset  = ($page - 1 ) * $perPage;

$statement = $conn->prepare("SELECT * FROM campus_news WHERE campus=:cat AND visibility = :sh");

$statement->bindParam(":sh", $vis);
$statement->bindParam(":cat", $_GET['c']);
$statement->execute();
$count = $statement->rowCount();

$totalPages = ceil($count/$perPage);
?>




<?php


getCatPaginatedCampusNews($conn,$offset,$perPage,$_GET['c']) ?>
</div>

</div>

<div class="composs-panel-pager">






  <p><?php echo $page ?> of <?php echo $totalPages ?>pages</p>

  <?php if(isset($_GET['p'])){
    if($_GET['p'] >= 2){
      $prev = $_GET['p'] - 1;
      echo '<a class="prev page-numbers" href="campus_news?c='.$_GET['c'].'&p='.$prev.'"><i class="fa fa-angle-double-left"></i>Previous</a>';
    }elseif($_GET['p'] == 2){
      echo '<a class="prev page-numbers" href="campus_news?c='.$_GET['c'].'"><i class="fa fa-angle-double-left"></i>Previous</a>';
    }

  }
  $finalPage = 1;
  if(isset($_GET['p'])){
    $finalPage = $_GET['p'];
  }


  if($totalPages > 1 && $totalPages !=$finalPage ){
    if(isset($_GET['p'])){
      $next = $_GET['p'] + 1;
      echo '<a class="next page-numbers" href="campus_news?c='.$_GET['c'].'&p='.$next.'">Next<i class="fa fa-angle-double-right"></i></a>';
    }else{
      $next = $page + 1;
      echo '<a class="next page-numbers" href="campus_news?c='.$_GET['c'].'&p='.$next.'">Next<i class="fa fa-angle-double-right"></i></a>';
    }
  }



  ?>
</div>


<!-- END .composs-panel -->
</div>

<!-- END .composs-main-content -->
</div>
<!-- BEGIN #sidebar -->
<?php include 'include/campus_articles_aside.php' ?>

</div>

<!-- END .wrapper -->
</div>

<!-- BEGIN .content -->
</div>

<?php #
include("include/footer.php");
?>
