<?php
$stmt = $conn->prepare("UPDATE admin SET verification=:vs,user_status=:us WHERE hash_id=:gid");
$ver = 1;
$status = 1;
$stmt->bindParam(":gid",$_GET['id']);
$stmt->bindParam(":vs",$ver);
$stmt->bindParam(":us",$status);
$stmt->execute();


// if($tb == ""){
header("location:viewUsers");
// }






 ?>
