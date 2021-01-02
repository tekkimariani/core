<?php
namespace tekki\core\sys;
class Config{
    public function __construct() {
    }
    public static function get($path = null) {
        require '../conf/config.php';
        if ($path) {
            $config = $settings;
            $config['DOCUMENT_URI'] = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
            $path = explode('/',$path);
            foreach ($path as $bit) {
                if (isset($config[$bit])) {
                    $config = $config[$bit];
                }
            }
            return $config;
        }
        return false;
    }
    /**
     * Liefert keine URI. (Name falsch)
     * Liefert den falschen Pfad.
     * Ist derzeit unbrauchbar.
     * Wird im Moment durch config.php ersetzt.
     */
    public static function getUri() {
        $request_uri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
        $uri = str_replace(self::getPath(), '', $request_uri);
        return $uri;
    }
    /**
     * Liefert den Pfad zum Vendor-Ordner
     * Ist derartig nicht zu gebrauchen.
     */
    public static function getPath() {
        $dir = str_replace(['/','\\'], [DIRECTORY_SEPARATOR,DIRECTORY_SEPARATOR], __DIR__);
        $documentroot = str_replace(['/','\\'], [DIRECTORY_SEPARATOR,DIRECTORY_SEPARATOR], $_SERVER['DOCUMENT_ROOT']);
        $dirpath = str_replace($documentroot, '', $dir);
        $paths = explode(DIRECTORY_SEPARATOR, $dirpath);
        $count = count($paths)-2;
        $path='';
        for ($i=0;$i<$count;$i++) {
            if ($i==0) {
                $path = $paths[$i];
            } else {
                $path = $path.'/'.$paths[$i];
            }
        }
        return $path;
    }
    /**
     * Liefert mit Hilfe des Pfades der in der config.php festgelegt
     * wurde einen domainunabhängigen Link zum Rootpath des Projektes.
     * Dies wird genutzt um Dateien/Links innerhalb des Projektes zu referenzieren.
     */
    public static function getRootpath() {
        $rootpath = 'https://'.$_SERVER['SERVER_NAME'].self::get('path');
        return $rootpath;
    }
}
?>