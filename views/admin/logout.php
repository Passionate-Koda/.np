<?php
session_start();
setLogout($conn,$_SESSION['id']);
unset($_SESSION['id']);
session_destroy();
header("Location: adminLogin");
 ?>
