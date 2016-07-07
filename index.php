<?php
/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 06/07/2016
 * Time: 12:07
 */

require('services\Router.php');
require('services\Request.php');

Router::route(new Request());

