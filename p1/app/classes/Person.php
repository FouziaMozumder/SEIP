<?php
namespace App\classes;
use App\classes\User;

class Person extends User
{
    public $data = []; //variable declared
    //static property
    public static $city = 'Dhaka';
    //static method
    public static function hello()
    {
        echo 'In Hello';
        //call a non static function i=under static function
        echo self::$city;
    }


    //magic Method
    public function __construct($value)
    {
        echo '<pre>';
        print_r ( $value);
    }

    public function array() //function
    {
        $this -> data =
        [
            
            0 =>
                ['name'=>'jimina',
                'age'=> ['age1'=>'27','age2'=>'27+1'] 
                ],
            1 =>
                ['name'=>'jk',
                'age'=> ['age1'=>'25','age2'=>'25+1']
                ],
            2 =>
                ['name'=>'suga',
                'age'=> ['age1'=>'29','age2'=>'29+1']
                ],
            3 =>
                ['name'=>'RM',
                'age'=> ['age1'=>'28','age2'=>'28+1']
                ],
            4 =>['name'=>'himi'],
            5 => 'tonni'

        ];
        //print_r method to print the full array

        //echo '<pre>';
        //var_dump($this -> data);


        //print_r($this -> data);


        //foreach loop to print the array

        //foreach($this -> data as  $value)
        //{
          //  if(is_array($value))
            //{
                
              //  foreach($value as $key => $item)
                //{
                  //  if(is_array ($item))
                    //{   foreach($item as $key2 => $temp)
                      //  {
                        //    echo $key2 .':'.$temp;
                          //  echo '<br/>';  
                        //}
                    //}
                    //else
                    //{
                      //  echo $key.' :'.$item;
                        //echo '<br/>';

                    //}
                //}
            //} 
            //else
           // {
             //   echo $value;
            //}
            
        //}
    }
    public function test()
    {
        echo $this -> token;
    }   
    
}