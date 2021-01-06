<?php
namespace tekki\core\sys;
class Hash{
    public static function make($string,$salt=''){
        return hash('sha256', $string.$salt);
    }
    public static function uniqid(){
        return self::make(uniqid('',true));
    }
}