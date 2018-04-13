news.mckodev.com.ng<?php
$page_title = "Articles - New.Mckodev";
$page_name = "article_post";
include("include/header.php");



$stmt = $conn->prepare("SELECT * FROM blog WHERE hash_id =:idd");
$stmt->bindParam(":idd", $_GET['id']);
// $stmt->bindParam(":bk", $pp);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_BOTH);
extract($row);
$SDate = decodeDate($date_created);





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

         <div class="theiaStickySidebar">

           <!-- BEGIN .composs-panel -->
           <div class="composs-panel">

             <!-- <div class="composs-panel-title">
               <strong>Blog page style #1</strong>
             </div> -->

             <div class="composs-panel-inner">

               <div class="composs-main-article-content">

                 <h1><?php echo $title ?></h1>

                 <div class="composs-main-article-head">
                   <div class="composs-main-article-media">
                     <img src="<?php echo $image_1 ?>" alt="<?php echo $title ?>" />
                   </div>
                   <div class="composs-main-article-meta">
                     <span class="item"><i class="material-icons">access_time</i><?php echo $SDate ?></span>
                     <a href="#comments" class="item"><i class="material-icons">chat_bubble_outline</i><fb:comments-count href="http://news.mckodev.com.ng/article?id=<?php echo $_GET['id']  ?>"></fb:comments-count> Comments</a>
                     <span class="item"><i class="fa fa-user"></i><?php echo $author ?></span>
                     <span class="item"><script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/Share" data-url="http://philanthropycircuit/article?id=<?php echo $_GET['id'] ?>"></script></span>

 <span class="item"><a class="twitter-share-button"
  href="https://twitter.com/intent/tweet"
  data-size="small">
Tweet</a></span>
<span class="item"><div class="fb-share-button" data-href="http://news.mckodev.com.ng/article?id=<?php echo $_GET['id'] ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://news.mckodev.com.ng/article?id=<?php echo $_GET['id'] ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a> </div></span>
<span class="item"><div class="sharethis-inline-share-buttons"></div></span>
                   </div>

                 </div>

                 <div class="shortcode-content">
                  <?php echo $body ?>
                 </div>









               </div>
                <div class="fb-comments" data-mobile="true" data-href="http://news.mckodev.com.ng/article?id=<?php echo $_GET['id'] ?>" data-width="700px" data-numposts="10"></div>

             </div>

           <!-- END .composs-panel -->
           </div>

         </div>

       <!-- END .composs-main-content -->
       </div>

       <!-- BEGIN #sidebar -->
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
         <div class="widget">
           <h3>Latest articles</h3>
           <div class="widget-content ot-w-article-list">

             <?php getArticlePreview($conn); ?>

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
 <script>window.twttr = (function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0],
   t = window.twttr || {};
 if (d.getElementById(id)) return t;
 js = d.createElement(s);
 js.id = id;
 js.src = "https://platform.twitter.com/widgets.js";
 fjs.parentNode.insertBefore(js, fjs);

 t._e = [];
 t.ready = function(f) {
   t._e.push(f);
 };

 return t;
}(document, "script", "twitter-wjs"));</script>

<?php
  include("include/footer.php");
 ?>
