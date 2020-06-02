<?php

namespace controllers;

class SuperController {
    
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
        if(isset($_POST['post_tokken']) && $_POST['post_tokken'] == 1) {
            return $this->createCategory();
        }
    }
    
    private function createCategory() {
        
        $categoryTitle         = $_POST['category_title'];
        
        $postId = \models\Post::create($categoryTitle);
        
        if($postId) {
               
            \session\Session::setFlashMessage('create_category', 'New category was successfully created!');
            redirect('super');
            
        }
    }
    
    private function logout() {
        
        \user\User::logout();
        return redirect('index');
        
    }
}