<?php
$check = adminFullInfo($conn,$_SESSION['id']);
if($check['level'] == 4 ){
  $name = $check['firstname']." ".$lastname;
  $urii = explode("/", $_SERVER['REQUEST_URI']);
  $stmt = $conn->prepare("INSERT INTO defaulter VALUES(NULL,:id,:pg,NOW(),NOW())");
  $stmt->bindParam(":id", $name);
  $stmt->bindParam(":pg", $urii[1]);
  $stmt->execute();

  $cnt = $check['defaulted'] + 1;
  $default = $conn->prepare("UPDATE admin SET defaulted=:lv WHERE hash_id=:hid");
  $default->bindParam(":lv",$cnt);
  $default->bindParam(":hid",$_SESSION['id']);
  $default->execute();

  setLogout($conn,$_SESSION['id']);
  session_destroy();
  $success = "You have accessed a level your account is forbidden to access and You can be suspended for this, A notification has been sent to admin";
  $succ = preg_replace('/\s+/', '_', $success);
  header("Location: adminLogin?ssp=$succ");
}




 ?>
