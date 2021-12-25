<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 06/12/2021
 * Time: 12:20
 */

namespace App\classes;
use App\classes\User;

class Auth
{
    private $email;
    private $password;

    private $userEmail;
    private $userPassword;

    private $users;

    public function __construct($data = null)
    {
        if($data)
        {
            $this->email    = $data['email'];
            $this->password = $data['password'];
        }
    }
    public function index()
    {
        header('Location: pages/login.php ');
    }

    public function login()
    {
        $user = new User();
        $this->users = $user->getAllUser();
        foreach ($this->users as $item)
        {
            if($item['email'] == $this->email && $item['password'] == $this->password)
            {
                session_start();
                $_SESSION['id'] = $item['id'];
                $_SESSION['name'] = $item['name'];
                header('Location: home.php');
            }
        }
        return "Sorry invalid entry";
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location: ../index.php');
    }
}