<?php


class App
{
    
    public static $registry = [];
    
    public static function bind($key, $value) {
        static::$registry[$key] = $value;
    }

    public static function get($key) {
        if ( array_key_exists($key, static::registry) ) {
            return static::$registry[$key];
        } else {
            var_dump("No {$key} is found in the container.");
        }
    }
    
}