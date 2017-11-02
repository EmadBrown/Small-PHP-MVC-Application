<?php

class Controller {
    
        public function __constract()
        {
            echo 'OK';
         }
         
         public function model($model) 
        {
            require_once '../app/models/' . $model . '.php';
            return new $model();
         }
}

