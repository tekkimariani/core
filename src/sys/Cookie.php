<?php namespace tekki\core\sys;
class Cookie {
    public static function exists($name): bool {
        return (isset($_COOKIE[$name])) ? true : false;
    }
    public static function get($name): string {
        return $_COOKIE[$name];
    }
    public static function put($name, $value, $expiry): bool {
        return setcookie($name, $value, time() + $expiry, '/');
    }
    public static function delete($name) {
        self::put($name, '', time()-1);
    }
}
?>