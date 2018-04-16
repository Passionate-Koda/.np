<aside id="sidebar">

  <!-- BEGIN .widget -->

  <div class="widget">
    <h3>LATEST ARTICLES</h3>
    <div class="widget-content ot-w-article-list">
      <?php getArticlePreview($conn) ?>
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
