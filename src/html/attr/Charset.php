<?php
namespace tekki\core\html\attr;
trait Charset{
    public function setCharset(string $charset){
        $this->appendAttribut([Attr::CHARSET => $charset]);
    }
}