<?php

class Products extends BaseController {

    function __construct(){
        parent::__construct();
    }

    private function getAll(){
        $stmt = $this->db->connect()->query("SELECT * FROM products");
        return $stmt->fetchAll();
    }

    public function displayAll(){
      $result=""; 
      foreach($this->getAll() as $v){
        $result.=$v->product_type::display($v);
      }
      $this->view('products.php', ['products'=>$result]);
    }

    public function showAddProducts(){
        $this->view('add_product.php');
    }

    public function add(){
      $product = new $_POST['type'](...array_filter(array_values($_POST)));
      $product->add();
    }

    public function deleteProducts(){
      foreach($_POST['selected'] as $v){
          $this->delete($v);
      }
    }

    private function delete($id){
      $sql = "DELETE FROM products WHERE product_id=?";
      $stmt = $this->db->connect()->prepare($sql);
      $stmt->execute([$id]);
      $stmt = null;
    }
    
}