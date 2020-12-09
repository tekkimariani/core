<?php
namespace tekki\core\html\attr;
trait Open{
    public function setOpen($url){
        return $this->appendAttribut([Attr::OPEN => null]);
    }
}