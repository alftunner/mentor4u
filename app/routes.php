<?php

use Framework\routing\Route;
use Framework\routing\Router;

Router::addRoute(new Route('hello', 'getHello', Route::METHOD_GET));
