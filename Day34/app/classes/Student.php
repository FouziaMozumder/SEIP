<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 06/12/2021
 * Time: 10:13
 */

namespace App\classes;
use App\classes\User;
use App\classes\Example;
use App\classes\ExampleTwo;
use App\classes\ExampleThree;
use App\classes\ExampleFour;


class Student extends ExampleThree implements Example,ExampleTwo
{
    use ExampleFour;
    public $mobile;
    public function __construct()
    {
        //$this->name = 'BITM';
        //$this->email = 'info@bitm.com';
        $this->mobile = '01913434276';
    }
    public function test()
    {
        echo 'in test';
    }
    public function demo()
    {
        //parent::demo;
        echo 'in Demo';
    }

    public function manage()
    {
        echo $this->demo();
        //echo "Name is $this->name, email is $this->email, Mobile is $this->mobile";
    }
    public function one()
    {
        // TODO: Implement one() method.
        echo 'hello 1';
    }
    public function two()
    {
        // TODO: Implement two() method.
        echo 'hello 2';
    }
    public function three()
    {
        // TODO: Implement three() method.
        echo 'hello 3';
    }
    public function four()
    {
        // TODO: Implement four() method.
        echo 'hello 4';
    }
    public function five()
    {
        // TODO: Implement five() method.
        echo 'hello 5';
    }

}