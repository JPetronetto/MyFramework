<?php

namespace Core;

use Core\View;
use Core\Model;

abstract class Controller
{
    public $view;

    public $model;

    public function __construct()
    {
        $this->view = new View();

        $this->model = new Model();
    }
}
