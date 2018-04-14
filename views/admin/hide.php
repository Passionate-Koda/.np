<?php
include("include/student_limit.php");
include("include/level1_limit.php");
include("include/level2_limit.php");

$tb = $_GET['t'];
$stmt = $conn->prepare("UPDATE $tb SET visibility=:vs WHERE hash_id=:gid");
$show = "hide";
$stmt->bindParam(":gid",$_GET['id']);
$stmt->bindParam(":vs",$show);
$stmt->execute();

if($tb == "blog"){
header("location:manageArticles");
}
if($tb == "news"){
header("location:manageNews");
}
if($tb == "grants"){
header("location:manageTrainings");
}
if($tb == "report"){
header("location:manageReports");
}
if($tb == "training"){
header("location:managePrograms");
}
if($tb == "insight"){
header("location:manageInsights");
}
if($tb == "campus_news"){
header("location:manageCampusNews");
}
if($tb == "campus_article"){
header("location:manageCampusArticles");
}
 ?>
