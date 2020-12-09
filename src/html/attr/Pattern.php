<?php
namespace tekki\core\html\attr;
trait Pattern{
    public function setPattern($regexp){
        return $this->appendAttribut([Attr::PATTERN => $regexp]);
    }
}