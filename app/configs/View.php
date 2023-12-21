<?php

class View {

    public function render($page, $data=[]){
        echo preg_replace_callback("/({{)(\w+)(}})/", function ($k) use($data){
            if(isset($data[$k[2]])){
                return $data[$k[2]];
            }
        }, file_get_contents("./views/$page"));
    }

}
