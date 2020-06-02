<?php

namespace models;

class CV {
    
    public static function create($cvAge, $cvAddress, $cvMobile, $cvExperience, $cvSkills, $cvEducation) {
        
        $query = "INSERT INTO monsterhr.user_personal_data(age, address, mobile, experience, skills, education) "
                . "VALUES('{$cvAge}', {$cvAddress}, '{$cvMobile}', {$cvExperience}, {$cvSkills}, {$cvEducation})";
        
        \db\Database::getInstance()->query($query);
        return \db\Database::getInstance()->lastInsertedId();
        
    }
    
    public static function fetch($userId = null) {
        
        $query = "SELECT * FROM monsterhr.user_personal_data";
        
        if($id) {
            $query = "$query WHERE user_id = {$userId}";          
        }
        
        \db\Database::getInstance()->query($query);
        return \db\Database::getInstance()->fetchCollection();
        
        
//        if(is_null($id)) {
//            
//            \db\Database::getInstance()->query("SELECT * FROM cms.cms_posts");
//            return \db\Database::getInstance()->fetch();
//            
//        }
//        
//        \db\Database::getInstance()->query("SELECT * FROM cms.cms_posts WHERE id = {$id}");
//        return \db\Database::getInstance()->fetch();
        
    }
}