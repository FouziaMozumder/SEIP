<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 06/12/2021
 * Time: 10:09
 */

namespace App\classes;


class User
{
    public $name;
    public $email;
    private $data = [];

    public function __construct()
    {

    }
    public function index()
    {
        //$this->name = 'BITM';
        //$this->email = 'info@bitm.com';
        //return "User name is $this->name and email is $this->email";
    }
    public function getAllUser()
    {
        $this->data = [
            0=> [
                'id' => 1,
                'name' => 'Fouzia',
                'email' => 'Fouzia@gmail.com',
                'password' => '1123',
            ],
            1=> [
                'id' => 2,
                'name' => 'Mozumder',
                'email' => 'Mozumder@gmail.com',
                'password' => '1123',
            ],
            2=> [
                'id' => 3,
                'name' => 'Himi',
                'email' => 'himi@gmail.com',
                'password' => '1123',
            ]
        ];
        return $this->data;
    }

}