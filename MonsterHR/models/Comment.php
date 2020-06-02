<?php

namespace models;

class Comment {
    
    public static function create($paramCollection) {
        
        $postId     = $paramCollection['postId'];
        $content    = $paramCollection['content'];
        $author     = $paramCollection['author'];
        
        $query = "INSERT INTO monsterhr.comments(post_id, content, author)"
                . "VALUES({$postId}, '{$content}', '{$author}')";
                
        \db\Database::getInstance()->query($query);
        return \db\Database::getInstance()->lastInsertedId();
    }
    
    public static function fetch($id = null) {
        
        $query = "SELECT * FROM monsterhr.comments";
        
        if($id) {
            $query = "SELECT * FROM monsterhr.comments WHERE id = {$id}";
        }
        
        \db\Database::getInstance()->query($query);
        return \db\Database::getInstance()->fetchCollection();
        
    }
    
    public static function remove($param) {
        // only for super
    }
    
    public static function update($param) {
        // only for super
    }
    
    public static function fetchCommentsByPostId($id) {
        
        $query = "SELECT * FROM monsterhr.comments WHERE post_id = {$id}";
        
        \db\Database::getInstance()->query($query);
        \db\Database::getInstance()->fetchCollection();
    }
    
}

