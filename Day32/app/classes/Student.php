<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 02/12/2021
 * Time: 09:58
 */

namespace App\classes;


class Student
{
    private $name;
    private $email;
    private $mobile;
    public  $file;
    public  $fileName;
    public  $data;

    private $array;
    private $array1;
    private $array2;
    private $imageFile;
    private $imageName;
    private $directory;

    public function __construct($data = null, $file = null)
    {
        if($data && $file)
        {
            $this->name      = $data['name'];
            $this->email     = $data['email'];
            $this->mobile    = $data['mobile'];

            $this->imageFile = $file;
        }
    }

    public function index()
    {
        $this->imageName =$this->imageFile['image']['name'];
        $this->directory ='../assets/image/'.$this->imageName;
        move_uploaded_file($this->imageFile['image']['tmp_name'],$this->directory);


        $this->fileName = './db.txt';
        $this->file = fopen($this->fileName,'a');
        $this->data =  "$this->name,$this->email,$this->mobile,$this->directory$";
        fwrite($this->file, $this->data);
        fclose($this->file);

        //echo 'Success';
        return 'data save successfully';
    }

    public function getAllStudentInfo()
    {
        $this->file = './db.txt';
        $this->data = file_get_contents($this->file);
        $this->array = explode("$",$this->data);

        foreach ($this->array as $key => $value)
        {
            $this->array2 = explode(",", $value);
            if($this->array2[0])
            {
                $this->array1[$key]['name']   = $this->array2[0];
                $this->array1[$key]['email']  = $this->array2[1];
                $this->array1[$key]['mobile'] = $this->array2[2];
                $this->array1[$key]['image'] = $this->array2[3];

            }
        }
        //echo '<pre>';
        //print_r($this->array1);
        //echo '<pre/>';
        return $this->array1;
    }
}