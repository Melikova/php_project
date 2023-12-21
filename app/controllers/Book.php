<?php

class Book extends Product {

    function __construct($sku, $name, $price, $product_type, $weight){
        parent::__construct($sku, $name, $price);
        $this->product_type=$product_type;
        $this->product_weight=$weight;
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
            "Weight: ".$data->product_weight." KG"
        );
    }
    
}