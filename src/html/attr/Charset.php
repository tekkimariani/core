<?php
namespace tekki\core\html\attr;
trait Charset{
    public function setCharset(string $charset){
        return $this->appendAttribut([Attr::CHARSET => $charset]);
    }
}