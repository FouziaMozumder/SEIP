<?php
require_once './vendor/autoload.php';

use App\classes\User;
$user = new User();

$user->login();
echo '<br/>';
$user->logout();
echo '<br/>';
$user->home();
echo '<br/>';
echo '<br/>';
$user->name();
echo '<br/>';
$user->demo();
echo '<br/>';
$user->operator();
