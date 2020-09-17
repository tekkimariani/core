<?php
namespace tekki\core\php;
use FirePHP;
class DOMElement extends \DOMElement{
    public function __construct(string $name, string $value='', string $namespaceURI=''){
        $this->console = \FirePHP::getInstance(true);
        $this->console->log(__METHOD__);
        return parent::__construct($name,$value,$namespaceURI);
    }
}