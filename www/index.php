<?php
#Define App Path
define("APP_PATH", dirname(dirname(__FILE__)));


#load database
#load Controllers(functions)
require APP_PATH."/controllers/controller.php";

#load routes
require APP_PATH."/routes/router.php";



//
require APP_PATH."/public_controller/controller.php";

#load routes
require APP_PATH."/public_routes/router.php";

 ?>
