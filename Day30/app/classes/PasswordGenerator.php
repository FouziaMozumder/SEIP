<?php


namespace App\classes;


class PasswordGenerator

{
    public $givenLength;
    public $passwordData = [];
    public $password;
    public $maxIndex;
    public $index;
    public $i;

    public function __construct($data)
    {
        $this->givenLength = $data['given_length'];
    }
    public function  index()
    {
        $this->passwordData = ['A','B','C','V','B','N','M','S','P','O',
            'I','U','a','z','x','c','v','b','n','m','l',
            'k','h','g','f','d','s','p','o','i','u','y','t','r','e','w',
            'q','0','1','2','3','4','5','6','7','8','9','#','!','$','*','&','+','-'];
        $this->maxIndex = count ($this-> passwordData)-1;

        //.....................for Loop....................//
        for ($this->i = 0; $this->i <= $this->givenLength; $this->i++)
        {
            $this->index = rand(0, $this->maxIndex);
            $this->password .= $this->passwordData[$this->index];
        }

        return $this->password;
    }
}
