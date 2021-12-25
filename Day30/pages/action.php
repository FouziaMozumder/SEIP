<?php
require_once '../vendor/autoload.php';
use App\classes\PasswordGenerator;
use App\classes\ImageUpload;

if(isset($_POST['btn']))
{
    $passwordGenerator = new PasswordGenerator($_POST);
    $result = $passwordGenerator -> index();
    include 'home.php';
}

else if (isset($_POST['btn1']))
{
    $ImageUpload = new ImageUpload($_POST);
    $ImageUpload ->index();

}
