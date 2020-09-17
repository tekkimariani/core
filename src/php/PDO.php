<?php
namespace tekki\core\php;
#use FirePHP;
use PDO as PHP_PDO;
class PDO extends PHP_PDO{
    public function __construct($dsn,$username=null,$passwd=null,$options=null){
        #$this->console = FirePHP::getInstance(true);
        #$this->console->log(__METHOD__);
        return parent::__construct($dsn,$username,$passwd,$options);
    }
}
?>