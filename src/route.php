<?php

require_once "db.php";
require_once "models/route.php";
require_once "controllers/CamperController.php";
require_once "controllers/ProductoController.php";


$route = new Route($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);