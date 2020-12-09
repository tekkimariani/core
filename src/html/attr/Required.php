<?php
namespace tekki\core\html\attr;
trait Required{
    public function setRequired(){
        return $this->appendAttribut([Attr::REQUIRED => null]);
    }
}