<?php
//check for suspended user_status
$check = adminFullInfo($conn,$_SESSION['id']);
if($check['user_status'] == 2 ){
  setLogout($conn,$_SESSION['id']);
  session_destroy();
  $success = "Your Account has Been Suspended";
  $succ = preg_replace('/\s+/', '_', $success);
  header("Location: adminLogin?ssp=$succ");
}





if($check = false ){
  unset($_SESSION['id']);
  session_destroy();
  $success = "You don't have an account";
  $succ = preg_replace('/\s+/', '_', $success);
  header("Location: adminLogin?wrn=$succ");
}












// $level = adminLevel($conn, $_SESSION['id']);
// if($level < 5){
//   $success = "You only Have Access to that page yet";
//   $succ = preg_replace('/\s+/', '_', $success);
//   header("Location: addProfile?wrn=$succ");
// }
 ?>
