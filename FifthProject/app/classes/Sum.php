<?php
namespace App\classes;
class Sum
{
    public $startingNumber;
    public $endingNumber;
    public $result;
    public $i;

    public function __construct($data)
    {
        $this->startingNumber = $data['starting_Number'];
        $this->endingNumber = $data['ending_Number'];
    }

    public function index()

    {
        $this->result .= $this->startingNumber + $this->endingNumber ;
        return $this->result;
    }
}