<?php
namespace App\classes;
class User

{
    public $firstName;
    public $lastName;
    public $numberOne;
    public $numberTwo;
    public $result;
    public $name;
    public $email;
    public $mobile;

    public function login()
    {
        echo 'In login';
        echo '<br/>';
        echo 'This is my Login Page';
    }
    public function logout()
    {
        echo 'In Logout';
        echo '<br/>';
        echo "This is my Logout Page";
    }
    public function home()
    {
        echo 'In Home page';
        echo '<br/>';
        echo "This is my Home page";

    }
    public function name()
    {
        $this->firstName = 'Fouzia';
        $this->lastName = 'Mozumder';
        echo $this-> firstName.' '.$this->lastName;
        echo '<br/>';
    }

    public function demo()
    {
        $this->name();
        
        $this->firstName = true;
        echo gettype($this->firstName);
        $this->lastName = 'Mozumder';
        echo $this-> firstName.' '.$this->lastName;

    }
    public function operator()
    {   
        $this->numberOne = 10;
        $this->numberTwo = 20;
        
        echo $this->numberOne + $this->numberTwo;
        echo '<br/>';
        echo $this->numberOne - $this->numberTwo;
        echo '<br/>';
        echo $this->numberOne / $this->numberTwo;
        echo '<br/>';
        echo $this->numberOne * $this->numberTwo;
        echo '<br/>';
        echo $this->numberOne += $this->numberTwo;
        echo '<br/>';
        echo $this->numberOne -= $this->numberTwo;
        echo '<br/>';
        echo $this->numberOne *= $this->numberTwo;
        echo '<br/>';
        echo $this->numberOne /= $this->numberTwo;
        echo '<br/>';
        echo $this->numberOne %= $this->numberTwo;
        echo '<br/>';
        echo $this->numberOne .= $this->numberTwo;
        echo '<br/>';
    }
}