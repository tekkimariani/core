<?php
namespace tekki\core\html\attr;
trait Loop{
    public function setLoop(){
        return $this->appendAttribut([Attr::LOOP => null]);
    }
}