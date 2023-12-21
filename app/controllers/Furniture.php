<?php

class Furniture extends Product {

    function __construct($sku, $name, $price, $product_type, $height, $width, $length){
        parent::__construct($sku, $name, $price);
        $this->product_type=$product_type;
        $this->product_height=$height;
        $this->product_width=$width;
        $this->product_length=$length;
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
            "Dimension: ".$data->product_width."x".$data->product_height."x".$data->product_length
        );
    }
    
}