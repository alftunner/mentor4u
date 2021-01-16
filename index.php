<?php

use Framework\routing\Request;
use Framework\routing\Router;

require_once "vendor/autoload.php";

echo (new Router(new Request()))->getContent();



