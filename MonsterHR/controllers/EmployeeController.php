<?php

namespace controllers;

class EmployeeController {
    
    public function index() {
        
        if(\user\User::isNotLoged()) {
            return redirect('index');
        }
        
        if(\user\User::isNotEmployee()) {
            return redirect('index');
        }
        
        if(isset($_GET['action']) && $_GET['action'] == 'logout') {
            return $this->logout();
        }
                        
        if(isset($_POST['post_tokken']) && $_POST['post_tokken'] == 1) {
            return $this->createCV();
        }
    }
    
    private function createCV() {

        $cvAge          = $_POST['age'];
        $cvAddress      = $_POST['address'];
        $cvMobile       = $_POST['mobile'];
        $cvExperience   = $_POST['experience'];
        $cvSkills       = $_POST['skills'];
        $cvEducation    = $_POST['education'];
        
        $cvId = \cv\CV::create($cvAge, $cvAddress, $cvMobile, $cvExperience, $cvSkills, $cvEducation);
        
        if($cvId) {
               
            \session\Session::setFlashMessage('create_cv', 'Your CV was successfully created!');
            redirect('employee');
            
        }
    }
    
    private function logout() {
        
        \user\User::logout();
        return redirect('index');
        
    }
}