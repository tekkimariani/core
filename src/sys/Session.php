<?php
namespace tekki\core\sys;
class Session{
    public static function exists(int $name){
        return (isset($_SESSION[$name])) ? true : false;
    }
    public static function put(string $name, string $value){
        return $_SESSION[$name] = $value;
    }
    public static function get(string $name){
        return $_SESSION[$name];
    }
    public static function delete(string $name){
        if(self::exists($name)){
            unset($_SESSION[$name]);
        }
    }
}