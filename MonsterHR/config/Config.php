<?php

namespace config;

class Config {
    
    public static function db($dbHandler = null) {
        
        if($dbHandler == 'test') {
            
            return array(
                'db_host' => 'localhost',
                'db_user' => 'root',
                'db_name' => 'monsterhr_test',
                'db_pass' => ''
            );  
        }
        
        if($dbHandler == 'prod') {
            
            return array(
                'db_host' => 'localhost',
                'db_user' => 'root',
                'db_name' => 'monsterhr_prod',
                'db_pass' => ''
            );  
        }
        
        return array(
            'db_host' => 'localhost',
            'db_user' => 'root',
            'db_name' => 'monsterhr',
            'db_pass' => ''
        );
        
    }
    
}

