<?php

namespace routes;

class PostApi {
    
    public function index($id = null) {
        
        $collection = \models\Post::fetch($id);
        echo json_encode($collection);
        
    }
    
    public function category($id) {
        
        $collection = \models\Post::fetchPostByCategory($id);
        echo json_encode($collection);
    }
    
    public function search() {
        
        $collection = \models\Post::search(array(
            'q'         => $_GET['q'],
            'searchBy'  => $_GET['searchBy']
        ));
        
        echo json_encode($collection);
    }
    
    public function create() {
        
        $argumentCollection = array(
            'title'       => $_POST['post_title'],
            'details'     => $_POST['post_details'],
            'description' => $_POST['post_description'],
            'category'    => $_POST['post_job_category']
        );
        
        $postId = \models\Post::create($argumentCollection);
        
        if($postId) { 
            $collection = \models\Post::fetch($recordId);
            echo json_encode($collection);
        }
        else {
            echo "Error";
        }
    }
    
    public function delete() {
        
        $id         = $_POST['post_id'];
        $isDeleted  = \models\Post::delete($id);
        
        if($isDeleted) {
            echo "Success";
        }
        else {
            echo "Error";    
        }
        
    }
    
}