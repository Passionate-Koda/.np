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
              <!-- <h3>Who We Are</h3>
  <p style="text-align: justify;">New.Mckodev is a pan-African nonprofit media and research organisation based in Lagos, Nigeria. Founded on the firm belief that Africans need to tell their own stories, our mission is to create and curate content to inform and inspire a new narrative on philanthropy and development in Africa.</p>
  <p>We research and analyse current and emerging philanthropy topics, provide resources on best practices, discuss the work of a wide array of philanthropic organizations, and provide information about grant and training opportunities in the sector. We primarily focus on African-based foundations, non-profit organizations, and social enterprises, but occasionally highlight relevant global organisations.</p>
  <p style="text-align: justify;">To stay updated on our progress and to receive our most important content, subscribe to our newsletter, <strong>The Weekly Circuit.</strong>  For other enquiries, please send an email to: editor@news.mckodev.com.ng.</p> -->
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
