<?php
namespace tekki\core\html\attr;
trait AcceptCharset {
    public function setAcceptcharset(string $value){
        return $this->appendAttribut([Attr::ACCEPT_CHARSET => $value]);
    }
}