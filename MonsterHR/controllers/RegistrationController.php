<?php

namespace controllers;

class RegistrationController {
    
    public function index() {
        
        if(isset($_POST) && isset($_POST['post_tokken'])) {
            
            $fname      = $_POST['fname'];
            $lname      = $_POST['lname'];
            $username   = $_POST['username'];
            $email      = $_POST['email'];
            $password   = $_POST['password'];
            
            if(\user\User::registrationSuper($fname, $lname, $username, $email, $password)) {
                echo "Your registration was successfull!";
            }
            
        }       
    }
    
//    public function userRoleSuper() {
//       
//        if(isset($_POST) AND isset($_POST['super'])) {
//            
//            $fname      = $_POST['fname'];
//            $lname      = $_POST['lname'];
//            $username   = $_POST['username'];
//            $email      = $_POST['email'];
//            $password   = $_POST['password'];
//            
//            if(\user\User::registrationSuper($fname, $lname, $username, $email, $password)) {
//                echo "Your registration was successfull!";
//            }
//            
//        }        
//    }
//    
//    public function userRoleHr() {
//        
//        if(isset($_POST) AND isset($_POST['hr'])) {
//
//            $fname      = $_POST['fname'];
//            $lname      = $_POST['lname'];
//            $company    = $_POST['company'];
//            $username   = $_POST['username'];
//            $email      = $_POST['email'];
//            $password   = $_POST['password'];
//
//            if(\user\User::registrationHr($fname, $lname, $company, $username, $email, $password)) {
//                echo "Your registration was successfull!";
//            }
//
//        }
//    }        
        
//        if(isset($_POST) AND isset($_POST['employer'])) {
//            
//            $company    = $_POST['company'];
//            $email      = $_POST['email'];
//            $password   = $_POST['password'];
//            
//            if(\user\User::registrationEmployer($company, $email, $password)) {
//                echo "Your registration was successfull!";
//            }
//            
//        }
//        
//        if(isset($_POST) AND isset($_POST['employee'])) {
//            
//            $fname      = $_POST['fname'];
//            $lname      = $_POST['lname'];
//            $username   = $_POST['username'];
//            $email      = $_POST['email'];
//            $password   = $_POST['password'];
//            
//            if(\user\User::registrationEmployee($fname, $lname, $company, $username, $email, $password)) {
//                echo "Your registration was successfull!";
//            }
//            
//        }
}
