<?php

namespace models;

class Post {
    
    public static function create($argumentCollection) {    
        
        $title          = $argumentCollection['title'];
        $details        = $argumentCollection['details'];
        $description    = $argumentCollection['description'];
        $categoryId     = $argumentCollection['category'];
        
        $query = "INSERT INTO monsterhr.posts(title, details, description) "
                . "VALUES('{$title}', '{$details}', '{$description}')";
        
        \db\Database::getInstance()->query($query);
        $lastInsertedId = \db\Database::getInstance()->lastInsertedId();
        
        $query = "INSERT INTO monsterhr.post_job_category(post_id, category_id) "
                . "VALUES('{$lastInsertedId}', '{$categoryId}')";
        
        \db\Database::getInstance()->query($query);
        
        return $lastInsertedId;
        
    }
        
    public static function update() {
        
    }
        
    public static function delete($id) {
        
        $query = "DELETE FROM monsterhr.posts WHERE id = {$id}";
        \db\Database::getInstance()->query($query);
        
        return (\db\Database::getInstance()->affectedRows() == 1);
    }
    
    public static function fetch($id = null) {
        
        if(is_null($id)) {
            $query = "SELECT * FROM monsterhr.posts";
        }
        else {
            $query = "SELECT * FROM monsterhr.posts WHERE id = {$id}";
        }
        
        \db\Database::getInstance()->query($query);
        return \db\Database::getInstance()->fetchCollection();
        
    }
    
    public static function search($paramCollection) {
        
        $isSearchable = $paramCollection['q'] &&
                        $paramCollection['searchBy'];
        
        if($isSearchable) {
            
            $keyword = $paramCollection['q'];
            $column  = $paramCollection['searchBy'];
            $query   = "SELECT * FROM monsterhr.posts WHERE $column LIKE '%$keyword%'";
            
            \db\Database::getInstance()->query($query);
            return \db\Database::getInstance()->fetchCollection();
        }   
    }


    public static function fetchPostByCategory($categoryId) {
        
        $query = "SELECT a.* FROM 	
                                monsterhr.posts a,
				monsterhr.job_categories b,
                                monsterhr.post_job_category c
                
                WHERE a.id = c.post_id AND 
                      b.id = c.category_id
                      AND b.id = $categoryId";
        
        \db\Database::getInstance()->query($query);
        return \db\Database::getInstance()->fetchCollection();
        
    }
    
    
}
