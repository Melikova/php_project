<?php

class Dvd extends Product {

    function __construct($sku, $name, $price, $product_type, $size){
        parent::__construct($sku, $name, $price);
        $this->product_type=$product_type;
        $this->product_size=$size;
    }

    public function add(){
        $this->addProduct(array_slice($this->data, 1));
    }

    static function display($data){
        return self::displayProduct(
            $data->product_id, 
            $data->product_sku, 
            $data->product_name, 
            $data->product_price, 
            "Size: ".$data->product_size." MB"
        );
    }
    
}