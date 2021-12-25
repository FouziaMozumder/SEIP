<?php
namespace App\classes;
class Product
{
    public $product = [];
    public function index()
    {
        $this -> product = 
        [
            0=> ['name'=>'Mobile','brand'=>'Oppo', 'price'=>'1230'],
            1=> ['name'=>'Ac','brand'=>'Genaral', 'price'=>'50000'],
            2=> ['name'=>'Dress','brand'=>'Yellow', 'price'=>'2000'],
            3=> ['name'=>'Laptop','brand'=>'Mac', 'price'=>'150000']

        ];
        //table
        return $this -> product;
        //foreach loop 
        //foreach($this -> data as $item)
        //{
          //  echo 'product Name :'.$item['name'].' ,'.'product Brand :'.$item['brand'].' ,'.'product Price :'.$item['price'].'<br/>';
       // }
    }
}