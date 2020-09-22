<?php
namespace tekki\core\html\attr;
trait Required{
    public function setRequired(){
        $this->appendAttribut([Attr::REQUIRED => null]);
    }
}