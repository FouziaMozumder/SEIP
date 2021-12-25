<?php
namespace App\classes;
class Student
{
    public $data = [];
    public function array()
    {
        $this -> data =
        [
            2=>['name' =>'jimin'],

            0=>[
                'name'=> 'himi',
                'phone'=> ['m1'=>'013498584','m2'=>'013498584']
            ],
            1=>[
                'name'=> 'mimi',
                'phone'=> ['m1'=>'013498584','m2'=>'013498584']
            ]

        ];
        foreach ($this -> data as $item)
        {
            if(is_array($item))
                {
                    foreach($item as $value)
                    {
                        if(is_array ($value)){
                            foreach($value as $dog)
                            {
                                echo $dog;
                                echo '<br/>';
                            }
                        }
                        else
                        {
                            echo $value;
                            echo '<br/>';
                        }

                    }
                }
            else
            {
                echo $item;
                echo '<br/>';
            }
        }       
    } 
}