<?php

require_once "src/db.php";
require_once "models/route.php";



$route = new Route($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);