<?php
require_once './vendor/autoload.php';
//use App\classes\Person;
//use App\classes\User;
use App\classes\Product;

$product = new Product();
$result = $product->index();
//$product -> shope();

//$array = [12,34,56];
//$person = new Person($array);

//echo Person::hello();
//echo Person::$city;
//$person -> test();

//$user = new User();
//echo $user-> userName;
//echo $user-> login();

//echo $user-> token;

//echo $user-> changePassword();
//echo $user -> logout();
?>
<table border = "1" width ="700" cellpadding ="5">

    <tr>
        <th>SL No</th>
        <th>Product name</th>
        <th>Product Brand</th>
        <th>Product Price</th>
    </tr>
    <?php $i =1;?>
    <?php 
        foreach($result as $item)
        { 
            ?>
                <tr>
                    <th><?php echo $i++; ?></th>
                    <th><?php echo $item['name'];?></th>
                    <th><?php echo $item['brand'];?></th>
                    <th><?php echo $item['price'];?></th>
                </tr>
            <?php 
        }
    ?>
</table>