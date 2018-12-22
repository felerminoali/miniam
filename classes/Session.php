<?php

class Session{
    

    public static function setItem($qid, $ansid){
        $_SESSION['basket'][$qid]['answer']= $ansid;
    }
    
    public static function setFilter($category, $value){
        $_SESSION['filter'][$category]= $value;
    }
    
    public static function getSession($name = null){
        if(!empty($name)){
            return isset($_SESSION[$name]) ? $_SESSION[$name] : null;
        }
    }
    
    public static function setSession($name = null, $value = null){
        if(!empty($name) && !empty($value)){
            $_SESSION[$name] = $value;
        }
    }

    public static function clear($id = null){

        if(!empty($id) && isset( $_SESSION[$id])){
            $_SESSION[$id] = null;
            unset($_SESSION[$id]);
        }else{
            session_destroy();
        }
    }

    public static function clear_no_destroy($id = null){

        if(!empty($id) && isset( $_SESSION[$id])){
            $_SESSION[$id] = null;
            unset($_SESSION[$id]);
        }
    }
}