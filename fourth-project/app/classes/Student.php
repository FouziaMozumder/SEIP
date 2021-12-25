<?php
namespace App\classes;

//Student class

class Student{
    public $firstName;
    public $lastName;
    public $fullName;

    //constructor
    public function __construct($data)
        {
            $this->firstName = $data['first_name'];
            $this->lastName = $data['last_name'];
        }

        public function index()
        {
            $this -> fullName = $this->firstName .' '. $this->lastName;
            
            return $this-> fullName;
        }
}

    
    
   // public function __construct($data)
       // {
            //echo '<pre>';
            //print_r ($data);
            //echo '</pre>';
            //echo $data['first_name'];
            //echo $data['last_name'];
            
        //}
    