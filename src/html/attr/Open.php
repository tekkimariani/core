<?php
namespace tekki\core\html\attr;
trait Open{
    public function setOpen($url){
        $this->appendAttribut([Attr::OPEN => null]);
    }
}