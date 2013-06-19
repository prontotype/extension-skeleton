<?php

class ExamplePlugin extends Prontotype\Extension\Plugin {
    
    protected $name = 'example';
    
    public function speak()
    {
        return 'hello world';
    }
    
}
