<?php
$stmt = $conn->prepare("UPDATE admin SET user_status=:us WHERE hash_id=:gid");

$status = 2;
$stmt->bindParam(":gid",$_GET['id']);
$stmt->bindParam(":us",$status);
$stmt->execute();


// if($tb == ""){
header("location:viewUsers");
// }






 ?>
