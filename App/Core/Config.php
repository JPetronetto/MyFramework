<?php

namespace App\Core;

use App\Helpers\Session;

class Config
{

    public function __construct()
    {

        define('DIR', 'http://localhost/MyFramework/');

        define('DEFAULT_CONTROLLER', 'home');
        
        define('DEFAULT_METHOD', 'index');

        define('DB_TYPE', 'mysql');

        define('DB_HOST', 'localhost');

        define('DB_NAME', 'mvc');

        define('DB_USER', 'root');

        define('DB_PASS', 'root');

        define('PREFIX', 'mvc_');

        define('SESSION_PREFIX', 'mvc_');

        define('SITETITLE', 'My MVC');

        Session::init();
    }
}
