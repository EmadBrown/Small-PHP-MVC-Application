<?php


class HomeController  extends Controller{
   
        public function index($name = ' ') 
        {
                $user = Controller::model('User');
                $user->name = $name;
                Controller::view('home/index' , ['name' => $user->name]);
        }
        
  }
