<?php

namespace Core;

class View
{

    private static $headers = array();

    public static function render($path, $data = false, $error = false)
    {
        if (!headers_sent()) 
        {
            foreach (self::$headers as $header) 
            {
                header($header, true);
            }
        }
        require SMVC."app/Views/$path.php";
    }

}
