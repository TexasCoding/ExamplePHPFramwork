<?php namespace Src;

use Src\View;

class Controller
{

    public $view;

    public function __construct()
    {
        $this->view = new View();
    }

}
