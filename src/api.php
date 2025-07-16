<?php

require_once "route.php";



$route = new Route($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);