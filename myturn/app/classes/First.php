<?php
namespace App\classes;

class First
{
    public $fName;
    public $lName;
    
    public function test()
    {
        echo 'himi';
    }
    public function name()
    {
        $this->fName = 'fouzia';
        $this->lName = 'mozumder';
        echo $this-> fName .' '.$this->lName;

        
    
    }
}