<?php

class Router {
    
    public $router = [];
    
    public static function load($file) {
        
        $router = new static;
        
        require $file;
        
        return $router;
        
    }
    
    public function define($router) {
        
        $this->router = $router;
        
    }
    
    public function direct($uri) {
        
        if (array_key_exists($uri, $this->router)) {
            
            return $this->router[$uri];
            
        }
        
    }
    
    
    
    
}
