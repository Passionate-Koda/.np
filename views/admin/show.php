<?php
$tb = $_GET['t'];
$stmt = $conn->prepare("UPDATE $tb SET visibility=:vs WHERE hash_id=:gid");
$show = "show";
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
header("location:manageGrants");
}
if($tb == "report"){
header("location:manageReports");
}
if($tb == "training"){
header("location:manageTrainings");
}
if($tb == "insight"){
header("location:manageInsights");
}
// if($tb == ""){
// header("location:manageTrainings");
// }






 ?>
