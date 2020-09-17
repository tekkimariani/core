<?php
namespace tekki\core\php;
use FirePHP;
class DOMDocument extends \DOMDocument{
    public function __construct($version=null,$encoding=null){
        $this->console = \FirePHP::getInstance(true);
        $this->console->log(__METHOD__);
        return parent::__construct($version,$encoding);
    }
}