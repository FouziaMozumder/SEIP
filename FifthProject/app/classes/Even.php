<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 04/12/2021
 * Time: 13:19
 */

namespace App\classes;


class Even
{

    public $startingNumber;
    public $endingNumber;
    public $result;
    public $i;
    public $j;

    public function __construct($data)
    {
        $this->startingNumber = $data['starting_Number'];
        $this->endingNumber = $data['ending_Number'];
    }

    public function index()

    {

        for($this->i = $this->startingNumber; $this->i <= $this->endingNumber ;)
        {
            if ($this->i % 2 != 0)
            {
                $this->result .= $this->i . ' ';
                $this->i++;
            }
            else
            {
                $this->i++;
            }
        }
        return $this->result;



        //for($this->i = $this->startingNumber;$this->i <= $this->endingNumber ; $this->i ++)
        //{
        //  $this ->result = $this->i;
        //}
        //return $this->result ;
    }
}

