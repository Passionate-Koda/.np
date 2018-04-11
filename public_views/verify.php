<?php
if(isset($_GET['vcid'])){
  $stmt = $conn->prepare("UPDATE user SET verification=:vs,user_status=:us WHERE hash_id=:gid");
  $ver = 1;
  $status = 1;
  $stmt->bindParam(":gid",$_GET['vcid']);
  $stmt->bindParam(":vs",$ver);
  $stmt->bindParam(":us",$status);
  $stmt->execute();

  $success = "Your Account Has Been verified";
  $succ = preg_replace('/\s+/', '_', $success);
  header("Location:userLogin?success=$succ");
}

 ?>
