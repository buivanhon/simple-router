<?php

class AboutController
{

    public function __construct() {
        echo __CLASS__;
    }

    public function show() {
        echo '->show()';
        return $this;
    }
    
}

?>