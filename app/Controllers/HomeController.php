<?php namespace App\Controllers;

class HomeController extends ApplicationController
{
    public function index()
    {
        $data = [
            'users' => [
                'home',
                'house'
            ]
        ];

        return $this->view->render('home/index', $data);
    }

    public function about(){
        echo "This is the about page.";
    }
}
