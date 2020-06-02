<?php

namespace controllers;

class EmployerController {
    
    public function index() {
                
        if(\user\User::isNotLoged()) {
            return redirect('index');
        }
        
        if(\user\User::isNotEmployer()) {
            return redirect('index');
        }
        
        if(isset($_GET['action']) && $_GET['action'] == 'logout') {
            return $this->logout();
        }
        
        if(isset($_POST['post_tokken']) && $_POST['post_tokken'] == 1) {
            return $this->createPost();
        }
    }
    
    private function createPost() {
        
        $postTitle         = $_POST['post_title'];
        $postDetails       = $_POST['post_details'];
        $postDescription   = $_POST['post_description'];
        
        $postId = \models\Post::create($postTitle, $postDetails, $postDescription);
        
        if($postId) {
               
            \session\Session::setFlashMessage('create_post', 'New offer was successfully created!');
            redirect('employer');
            
        }
    }
    
    private function logout() {
        
        \user\User::logout();
        return redirect('index');
        
    }
    
}