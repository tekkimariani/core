<?php
namespace tekki\core\php;
use FirePHP;
class DOMComment extends \DOMComment{
    public function __construct(string $value=''){
        $this->console = \FirePHP::getInstance(true);
        $this->console->log(__METHOD__);
        return parent::__construct($value);
    }
}