<?php
namespace tekki\core\html\attr;
trait Pattern{
    public function setPattern($regexp){
        $this->appendAttribut([Attr::PATTERN => $regexp]);
    }
}