<?php

namespace controllers;

class IndexController {
    
    private $postCollection = array();
    
    public function index() {
        $this->postCollection = \models\Post::fetch();
               
        if(isset($_GET) && isset($_GET['request']) && $_GET['request'] == 'data') {
            echo "Hello world!";
        }
    }
    
    public function getOfferPostCollection($param = null) {
        return $this->postCollection;
    }    
    
}

