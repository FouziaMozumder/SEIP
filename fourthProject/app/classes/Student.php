<?php
namespace App\classes;

class Student
{
    public $string;
    public $result;
        
    public function __construct($data)
    {
        $this ->string = $data['string'];
    }     
    public function index()
    {
        $iputValue=$_POST['string'];
    //echo str_word_count($iputValue);
    //$result1 = str_word_count($iputValue);
    //$result = strlen($iputValue);
        
    }
}