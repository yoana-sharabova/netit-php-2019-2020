<?php
include './external_autoload.php';

if(isset($_GET) && isset($_GET['endpoint'])) {
    
    $requestMethod = isset($_GET['method']) ? 
                     $_GET['method']         : 
                     'index';
    
    $requestId     = isset($_GET['id']) ? $_GET['id'] : null;
    
    $endpointMap = array(
        'posts'         => (new \routes\PostApi()),
        'categories'    => (new \routes\CategoryApi()),
        'comment'       => (new \routes\CommentApi())
    );
    
    // Refactor 
    if(is_null($requestId)) {
        $endpointMap[$_GET['endpoint']]->{$requestMethod}();
    }
    else {
        $endpointMap[$_GET['endpoint']]->{$requestMethod}($requestId);
    }
}
