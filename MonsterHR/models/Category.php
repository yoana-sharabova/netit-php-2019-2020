<?php

namespace models;

class Category {
    
    public static function create($title, $priority) {
        
        $query = "INSERT INTO monsterhr.job_categories(title, priority) VALUES('{$title}', {$priority})";
        \db\Database::getInstance()->query($query);
        
        return \db\Database::getInstance()->lastInsertedId();
        
    }
    
    public static function update($id, $title) {
        
        $query = "UPDATE monsterhr.job_categories SET title = '{$title}' WHERE id = {$id}";
        \db\Database::getInstance()->query($query);
        
        return (\db\Database::getInstance()->affectedRows() == 1);
    }
    
    public static function delete($id) {
        
        $query = "DELETE FROM monsterhr.job_categories WHERE id = {$id}";
        \db\Database::getInstance()->query($query);
        
        return (\db\Database::getInstance()->affectedRows() == 1);
    }
    
    public static function fetch($id = null) {

        $query = ($id) ? "SELECT * FROM monsterhr.job_categories WHERE id = {$id}" 
                       : "SELECT * FROM monsterhr.job_categories";
        
        \db\Database::getInstance()->query($query);
        return \db\Database::getInstance()->fetchCollection();
        
    }
    
}

