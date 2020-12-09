<?php
namespace tekki\core\html\attr;
trait Defer{
    public function setDefer(){
        return $this->appendAttribut([Attr::DEFER => null]);
    }
}