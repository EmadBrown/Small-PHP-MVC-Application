<?php


class HomeController  extends Controller{
   
        public function index() 
        {
                echo 'home/index' ;
        }
        
        public function user( $name = ' ') 
        {
                $user = Controller::model('User');
                $user->name = $name;
                echo $user->name;    
        }
}
