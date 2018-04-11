<?php
if(!isset($_SESSION['user_id'])){
  $success = "You are not signed in";
  $succ = preg_replace('/\s+/', '_', $success);
  header("Location:userLogin?sgn=$succ&rd=archive");
}
