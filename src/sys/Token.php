<?php
namespace tekki\core\sys;
class Token {
    public static function generate() {
        return Session::put(Config::get('session/token'), \md5(\uniqid()));
    }
    public static function check($token) {
        $tokenName = Config::get('session/token');
        if (Session::exists($tokenName) && $token === Session::get($tokenName)) {
            Session::delete($tokenName);
            return true;
        }
        return false;
    }
}