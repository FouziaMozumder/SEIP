<?php


namespace App\classes;


class incDecSum
{

    public $startingNumber;
    public $endingNumber;
    public $increaseValue;
    public $temp;

    public $result;
    public $i;
    public $j;

    public function __construct($data)
    {
        $this->startingNumber = $data['starting_Number'];
        $this->endingNumber = $data['ending_Number'];
        $this->increaseValue = $data['increase_Value'];
    }
    public function index()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)

        {
            //$this->temp = $this->i + ;
            $this->result = $this->i + $this->increaseValue. ' ';
        }
        return $this->result;
    }
}