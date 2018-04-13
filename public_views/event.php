<?php
$page_title = "Events - New.Mckodev";
$page_name = "event_show";
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
            <strong>Event</strong>
          </div>

          <div class="composs-panel-inner">
            <div class="map-block">
              <div class="map-block-header">



                <?php

                $stmt = $conn->prepare("SELECT * FROM event WHERE hash_id =:idd");
                $stmt->bindParam(":idd", $_GET['id']);
                // $stmt->bindParam(":bk", $pp);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_BOTH);
                extract($row);
                $SDate = decodeDate($start_date);
                $EDate = decodeDate($end_date);


                ?>





                <h3><?php echo $name ?></h3>
                <div class="paragraph-row">
                  <div class="column4">
                    <ul>
                      <li>Start Date:&nbsp<i class="material-icons">access_time</i><?php echo $SDate ?></li>
                      <li>End Date:&nbsp<i class="material-icons">access_time</i><?php echo $EDate ?></li>
                      <li>Venue:&nbsp<i class="material-icons">location_on</i><?php echo $venue ?></li>

                    </ul>
                  </div>
                  <div class="column4">
                    <i class="material-icons large-icon">location_city</i>
                    <!-- <i class="material-icons large-icon">location_on</i> -->
                  </div>
                </div>
              </div>
              <div class="item">

                <div class="item-content" style="margin-left:0px">
                  <p> <?php echo $about ?> </p>
                </div>
              </div>

              <!-- END .composs-panel -->
            </div>

            <!-- BEGIN .composs-panel -->


            <!-- END .composs-main-content -->
          </div>



        </div>

        <!-- END .wrapper -->
      </div>

      <aside id="sidebar">

        <!-- BEGIN .widget -->


        <!-- BEGIN .widget -->

        <div class="widget">
          <h3>Latest Reports</h3>
          <div class="widget-content ot-w-article-list">
            <?php getReportPreview($conn) ?>


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
        <!--<div class="widget">-->
        <!--  <h3>Latest articles</h3>-->
        <!--  <div class="widget-content ot-w-article-list">-->
        <!--    <?php //getArticlePreview($conn); ?>-->

        <!--  </div>-->
          <!-- END .widget -->
        <!--</div>-->
        <!-- BEGIN .widget -->


        <!-- END #sidebar -->
      </aside>

      <!-- BEGIN .content -->
    </div>

    <?php
    include("include/footer.php");
    ?>
