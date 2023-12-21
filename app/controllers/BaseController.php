<?php

class BaseController extends Database{
    
    function __construct(){
        $this->db=new Database();
    }

    function view($page, $data=[]){
        $v=new View();
        return $v->render($page, $data);
    }

}