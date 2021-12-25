<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 06/12/2021
 * Time: 11:13
 */

namespace App\classes;


abstract class ExampleThree
{
    public $price;
    protected $quantity;
    private $sum;

    public function demo()
    {
        echo 'in demo';
    }
    public abstract function  test();

}