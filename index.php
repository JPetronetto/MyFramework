<?php

error_reporting(E_ALL);

define('WWW_ROOT', dirname(__FILE__));

define('DS', DIRECTORY_SEPARATOR);

require_once(WWW_ROOT . DS . 'autoload.php');

use App\Core\Config;

use App\Helpers\Database;

new App\Core\Config;

$conn = Database::getInstance();
