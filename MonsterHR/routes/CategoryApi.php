<?php

namespace routes;

class CategoryApi {
    
    public function index() {
        
        $collection = \models\Category::fetch();
        echo json_encode($collection);
    }
    
    public function update() {
        
        $categoryId     = $_POST['category_id'];
        $categoryTitle  = $_POST['category_title'];
        
        $response = \models\Category::update($categoryId, $categoryTitle);
        
        if($response) {
            echo "Success";
        }
        else {
            echo "Fail";
        }
        
    }
    
    public function delete() {
        
        $categoryId = $_POST['category_id'];
        $response = \models\Category::delete($categoryId);
        
        if($response) {
            echo "Success";
        }
        else {
            echo "Fail";
        }
    }
    
    public function create() {
        
        $categoryTitle = $_POST['category_title'];
        $recordId = \models\Category::create($categoryTitle, 1);
        
        if($recordId) {
            
            $collection = \models\Category::fetch($recordId);
            echo json_encode($collection);
            
        }
        else {
            echo "Error";
        }
    }
}

