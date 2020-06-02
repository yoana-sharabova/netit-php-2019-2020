<?php

namespace controllers;

class LoginController {
    
    public function index() {
        
        if(isset($_POST) && isset($_POST['post_tokken'])) {
            
            $email      = $_POST['email'];
            $password   = $_POST['password'];
            
            if(\user\User::isAvailable($email, $password)) {
                
                $userObject = \user\User::login($email, $password);
                \user\User::set($userObject);
                
                if(\user\User::role() > 3) {
                    redirect('index');
                }
                
                if(\user\User::role() == 0) {
                    redirect('super');
                }
                
                if(\user\User::role() == 1) {
                    redirect('hr');
                }
                
                if(\user\User::role() == 2) {
                    redirect('employer');
                }
                
                if(\user\User::role() == 3) {
                    redirect('employee');
                }
            }
            
            
            \session\Session::setFlashMessage('error_message', 'User was not found :(');           
        }
    }  
}

