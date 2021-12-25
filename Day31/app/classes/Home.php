<?php


namespace App\classes;


class Home
{
    public function __construct()
    {

    }
    public function index()
    {
        header('location:pages/home.php');
    }

}