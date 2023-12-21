<?php

abstract class Product extends BaseController {

    public $data = [];

    function __construct($sku, $name, $price){
        parent::__construct();
        $this->product_sku = $sku;
        $this->product_name = $name;
        $this->product_price = $price;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }

    public function addProduct($data){
        $cols=implode(", ", array_keys($data));
        $values=implode(",", array_fill(0,count($data),"?"));
        $sql="INSERT INTO products ($cols) VALUES ($values)";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(array_values($data));
        $stmt = null;
    }

    static function displayProduct($id, $sku, $name, $price, $param){
        return '<div class="col">
        <div class="card h-100">
          <div class="card-body pb-5">
            <input class="delete-checkbox form-check-input" type="checkbox" value="'.$id.'">
            <div class="card-text text-center">
                <div>'.$sku.'</div>
                <div>'.$name.'</div>
                <div>'.$price.' $</div>
                <div>'.$param.'</div>
            </div>
          </div>
        </div>
      </div>';
    }

    abstract protected function add();
    abstract static function display($arr); 

}