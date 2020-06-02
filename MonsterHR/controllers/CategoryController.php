<?php

namespace controllers;

class CategoryController {
    
    public function index() {
                
        if(\user\User::isNotLoged()) {
            return redirect('index');
        }
        
        if(\user\User::isNotSuper()) {
            return redirect('index');
        }
        
        if(isset($_GET['action']) && $_GET['action'] == 'logout') {
            return $this->logout();
        }
    }
    
    private function logout() {
        
        \user\User::logout();
        return redirect('index');
        
    }
    
}