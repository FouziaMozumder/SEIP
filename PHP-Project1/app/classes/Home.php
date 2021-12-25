<?php


namespace App\classes;


class Home
{
    public function __construct()
    {

    }
    public function index()
    {
        //echo 'Hello world';
        header('location:pages/home.php');
    }

}