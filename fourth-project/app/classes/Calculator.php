<?php
namespace App\classes;
class Calculator
{
    public $firstNumber;
    public $secondNumber;
    public $action;
    public $result;
    
    public function __construct($data)
    {
        $this->firstNumber = $data['first_num'];
        $this->secondNumber = $data['second_name'];
        $this->action = $data['action'];
        
        //echo '<pre>';
        //print_r($data);
        //echo '</pre>';
    }
    public function index()
    {
        switch($this->action)
        {
            case '+':
                $this->result = $this ->add();
                break;

            case '-':
                $this->result = $this ->sub();
                break;
                
            case '*':
                $this->result = $this ->mul();
                break;
                
            case '/':
                $this->result = $this ->div();
                break;
                
            case '%':
                $this->result = $this ->mod();
                break;
                    
        }
        return $this ->result;
    }
    protected function add()
    {
        return $this->firstNumber + $this ->secondNumber;
    }
    protected function sub()
    {
        return $this->firstNumber - $this ->secondNumber;
    }
    protected function mul()
    {
        return $this->firstNumber * $this ->secondNumber;
    }
    protected function div()
    {
        return $this->firstNumber / $this->secondNumber;
    }
    protected function mod()
    {
        return $this->firstNumber % $this ->secondNumber;
    }
}