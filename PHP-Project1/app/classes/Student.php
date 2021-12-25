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
    private $p_name;
    private $p_price;
    private $s_amount;
    private $c_name;
    private $b_name;

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
            $this->p_name      = $data['p_name'];
            $this->p_price     = $data['p_price'];
            $this->s_amount    = $data['s_amount'];
            $this->c_name    = $data['c_name'];
            $this->b_name    = $data['b_name'];

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
        $this->data =  "$this->p_name,$this->p_price,$this->s_amount,$this->c_name,$this->b_name,$this->directory$";
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
                $this->array1[$key]['p_name']   = $this->array2[0];
                $this->array1[$key]['p_price']  = $this->array2[1];
                $this->array1[$key]['s_amount'] = $this->array2[2];
                $this->array1[$key]['c_name'] = $this->array2[3];
                $this->array1[$key]['b_name'] = $this->array2[4];
                $this->array1[$key]['image'] = $this->array2[5];

            }
        }
        //echo '<pre>';
        //print_r($this->array1);
        //echo '<pre/>';
        return $this->array1;
    }
}