<?php

require 'plugins/ExamplePlugin.php';

class ExampleExtension extends Prontotype\Extension\Extension {
    
    public function getPlugins()
    {
        return array(
            new ExamplePlugin($this->app)
        );
    }
        
    public function register()
    {
        // run any setup code here
    }
    
    public function before()
    {   
        // called before the request is processed
    }
    
    public function after()
    {
        // called after the request is processed
    }
    
}
