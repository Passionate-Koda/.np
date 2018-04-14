<?php
$page_title = "About - New.Mckodev";
  $page_name = "about";
  include ("include/header.php");
 ?>
<!-- BEGIN .content -->
<div class="content">
  <?php

$stmt = $conn->prepare("SELECT * FROM about");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_BOTH);





   ?>

  <!-- BEGIN .wrapper -->
  <div class="wrapper">

    <div class="content-wrapper">

      <!-- BEGIN .composs-main-content -->
      <div class="composs-main-content">

        <!-- BEGIN .composs-panel -->
        <div class="composs-panel">

          <div class="composs-panel-title">
            <strong>About</strong>
          </div>

          <div class="composs-panel-inner">
            <div class="shortcode-content">
          <?php     echo $row['about'] ?>

  </div>		</div>
            </div>
          </div>

        <!-- END .composs-panel -->
        </div>

      <!-- END .composs-main-content -->
      </div>

    </div>

  <!-- END .wrapper -->

<?php
  include ("include/footer.php");

 ?>
