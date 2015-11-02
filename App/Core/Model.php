<?php

namespace Core;

use Helpers\Database;

class Model {

    function __construct() {
        $this->db = new Database::getInstance();
    }

}