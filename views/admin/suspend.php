<?php
include("include/level1_limit.php");
include("include/student_limit.php");
include("include/level2_limit.php");
$stmt = $conn->prepare("UPDATE admin SET user_status=:us WHERE hash_id=:gid");

$status = 2;
$stmt->bindParam(":gid",$_GET['id']);
$stmt->bindParam(":us",$status);
$stmt->execute();


// if($tb == ""){
header("location:viewUsers");
// }






 ?>
