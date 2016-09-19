<?php namespace App\Controllers;

class HomeController extends ApplicationController 
{
    public function index()
    {
        echo "This is the HomeController@index";
    }

    public function about(){
        echo "This is the about page.";
    }
}
