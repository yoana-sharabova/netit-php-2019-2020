<?php

namespace user;

class User {
    
    public static function username() {
        return $_SESSION['user_reference']['username'];
    }
    
    public static function email() {
        return $_SESSION['user_reference']['email'];
    }
    
    public static function role() {
        return $_SESSION['user_reference']['role'];
    }
    
    public static function isLoged() {      
        return isset($_SESSION['user_reference']);
    }
    
    public static function isNotLoged() {      
        return !self::isLoged();
    }
    
    public static function isSuper() {
        return (self::role() == 0);
    }
    
    public static function isNotSuper() {
        return (self::role() > 0);
    }
    
    public static function isHr() {
        return (self::role() == 1);
    }
    
    public static function isNotHr() {
        return (self::role() != 1);
    }
    
    public static function isEmployer() {
        return (self::role() == 2);
    }
    
    public static function isNotEmployer() {
        return (self::role() != 2);
    }
    
    public static function isEmployee() {
        return (self::role() == 3);
    }
    
    public static function isNotEmployee() {
        return (self::role() != 3);
    }

    public static function set($userObject) {
        
        $_SESSION['user_reference'] = $userObject;

    }
         
    public static function login($email, $password) {
          
        if(User::isAvailable($email, $password)) {
            
            $password = md5($password);
                    
            $queryResult = \db\Database::getInstance()->query("SELECT * FROM monsterhr.users WHERE email = '{$email}' AND password = '{$password}'");
            return \db\Database::getInstance()->fetch();
        }
        
        return false;
    }
    
    public static function isAvailable($email, $password) {
        
        $password = md5($password);
               
        \db\Database::getInstance()->query("SELECT COUNT(*) AS number_of_rows FROM monsterhr.users WHERE email = '{$email}' AND password = '{$password}'");
        $collection = \db\Database::getInstance()->fetch();
        
        return ($collection['number_of_rows'] == 1);
    }
    
    public static function registrationSuper($fname, $lname, $username, $email, $password) {

        $password = md5($password);
        
        $query = "INSERT INTO monsterhr.users(username, email, password, role) "
                . "VALUES('{$username}', '{$email}', '{$password}', '0')";
                
        \db\Database::getInstance()->query($query);
        $lastInsertedId = \db\Database::getInstance()->lastInsertedId();
        
        $query = "INSERT INTO monsterhr.user_personal_data(fname, lname) "
                . "VALUES('{$fname}', '{$lname}')";
        
        \db\Database::getInstance()->query($query);
                                        
        if(\db\Database::getInstance()->lastInsertedId()) {
            return true;
        }    
        
        return false;
        
    }
    
    public static function registrationHr($fname, $lname, $company, $username, $email, $password) {

        $password = md5($password);
        
        $query = "INSERT INTO monsterhr.users(company, username, email, password, role) "
                . "VALUES('{$company}', '{$username}', '{$email}', '{$password}', '1')";
                
        \db\Database::getInstance()->query($query);
        $lastInsertedId = \db\Database::getInstance()->lastInsertedId();
        
        $query = "INSERT INTO monsterhr.user_personal_data(fname, lname) "
                . "VALUES('{$fname}', '{$lname}')";
        
        \db\Database::getInstance()->query($query);
                                        
        if(\db\Database::getInstance()->lastInsertedId()) {
            return true;
        }    
        
        return false;
        
    }
    
    public static function registrationEmployer($company, $email, $password) {

        $password = md5($password);
        
        $query = "INSERT INTO monsterhr.users(username, email, password, role) "
                . "VALUES('{$company}', '{$email}', '{$password}', '2')";
                
        \db\Database::getInstance()->query($query);
        $lastInsertedId = \db\Database::getInstance()->lastInsertedId();
                                        
        if(\db\Database::getInstance()->lastInsertedId()) {
            return true;
        }    
        
        return false;
        
    }
    
    public static function registrationEmployee($fname, $lname, $username, $email, $password) {

        $password = md5($password);
        
        $query = "INSERT INTO monsterhr.users(username, email, password, role) "
                . "VALUES('{$username}', '{$email}', '{$password}', '3')";
                
        \db\Database::getInstance()->query($query);
        $lastInsertedId = \db\Database::getInstance()->lastInsertedId();
        
        $query = "INSERT INTO monsterhr.user_personal_data(fname, lname) "
                . "VALUES('{$fname}', '{$lname}')";
        
        \db\Database::getInstance()->query($query);
                                        
        if(\db\Database::getInstance()->lastInsertedId()) {
            return true;
        }    
        
        return false;
        
    }
    
    public static function logout() {
        session_destroy();
    }
}