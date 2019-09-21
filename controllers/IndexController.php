<?php

class IndexController
{

    public function __construct() {
        echo __CLASS__;
    }

    public function index() {
        echo '->index()';
        return $this;
    }
    
}

?>