<?php
namespace App\classes;
class Asde
{
    public $startingNumber ;
    public $endingNumber ;
    public $result;
    public $i;
    public function __construct($data)
    {
        $this->startingNumber = $data['starting_Number'];
        $this->endingNumber = $data['ending_Number'];   
    }
    public function index()

    {

        for($this->i = $this->startingNumber;$this->i <= $this->endingNumber ; $this->i ++)
            {
                $this ->result .= $this->i . ' ';
            }
            return $this->result;
    }

    //public function index()
    //{
       // if($this->startingNumber > $this->endingNumbe)
        //{
         //   for($this->i = $this->startingNumber;$this->i <= $this->endingNumber ; $this->i ++)

         //       {
          //          $this ->result .= $this->i . ' ';
          //      }
        //}
       // else 
        //{
         //   for($this->i = $this->endingNumber ;$this->i <= $this->startingNumber ; $this->i --)

          //      {
           //         $this ->result .= $this->i . ' ';
         //       }
                
       // }
        //return $this->result;
    //}

}