<?php
namespace tekki\core\html\attr;
trait AcceptCharset{
    public function setAcceptCharset(string $value){
        $this->appendAttribut([Attr::ACCEPT_CHARSET => $value]);
    }
}