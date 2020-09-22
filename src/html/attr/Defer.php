<?php
namespace tekki\core\html\attr;
trait Defer{
    public function setDefer(){
        $this->appendAttribut([Attr::DEFER => null]);
    }
}