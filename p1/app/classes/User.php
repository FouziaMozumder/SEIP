<?php
namespace App\classes;
class User
{
    public $userName = 'bitm';
    protected $password = 'bitm990';
    private $token = '1234';
    
    public function login()
    {
        echo 'Log In';
    }
    protected function logout()
    {
        echo 'Log Out';
    }
    private function changePassword()
    {
        echo 'Change the Password';
    }

}