<?php

class Core {
    
    public function run(){
//        global $CFG;
        
        ob_start();
        
        require_once(Url::getPage());
        ob_get_flush();
    }
}