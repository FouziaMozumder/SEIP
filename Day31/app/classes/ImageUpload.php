<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 01/12/2021
 * Time: 10:17
 */

namespace App\classes;


use function PHPSTORM_META\elementType;

class ImageUpload
{
    private $post;
    private $file;
    private $directory;
    private $imageName;
    private $check;
    private $fileType;
    private $name;
    private $test;



    public function __construct($data,$file)
    {
        $this->post = $data;
        $this->file = $file;
    }
    public function index()
    {
        //$this->post['name'];
        //echo '<br/>';
        //echo str_replace(' ','_',$this->post['name']);

        //exit();

        //echo '<pre>';
        //print_r($this->post);
        //print_r($this->file);
        //echo '</pre>';


        $this->imageName = $this->file['image'] ['name'];
        $this->fileType = pathinfo($this->imageName,PATHINFO_EXTENSION);
        $this->test = str_replace(' ','_',$this->post['name']);
        $this->name = $this->test.'_'.time().'.'.$this->fileType;
        $this->directory = '../assets/image/'.$this->name;


        $this->check = getimagesize($this->file['image']['tmp_name']);

        if($this->check)
        {
            if(!file_exists($this->directory))
            {
                if($this->fileType == 'jpg' || $this->fileType == 'png' || $this->fileType == 'PNG' || $this->fileType == 'jpeg' )
                {
                    move_uploaded_file($this->file['image']['tmp_name'],$this->directory);
                    return [
                        'name' => $this->post['name'],
                        'image' =>$this->directory
                    ];
                }
                else
                {
                    echo 'File type should be jpg or png';
                }
            }
            else
                {
                    die('Sorry Already Exists');
                }

        }
        else
        {
            echo 'Please upload your image';
        }
    }
}