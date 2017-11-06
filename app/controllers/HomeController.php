<?php

class HomeController  extends Controller{
    
    public function index($name = ' ') 
        {
         $user = new User();
           return Controller::view('home/index' , ['name' => $user->name]);
        }
        
        public function create($username = ' ', $email = ' ') 
        {
            User::create([
                'username' => $username,
                'email' => $email
            ]);
        }
        
        
  }
