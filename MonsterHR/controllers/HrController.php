<?php

namespace controllers;

class HrController {
    
    public function index() {

        if(\user\User::isNotLoged()) {
            return redirect('index');
        }
        
        if(\user\User::isNotHr()) {
            return redirect('index');
        }

        if(isset($_GET['action']) && $_GET['action'] == 'logout') {
            \user\User::logout();
            return redirect('index');
        }
    }
}