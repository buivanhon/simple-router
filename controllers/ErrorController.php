<?php

class ErrorController
{

    public function __construct() {
        echo __CLASS__;
        return $this;
    }

    public function index() {
        echo '->index()';
        return $this;
    }
    
}


?>