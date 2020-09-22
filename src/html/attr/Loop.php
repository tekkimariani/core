<?php
namespace tekki\core\html\attr;
trait Loop{
    public function setLoop(){
        $this->appendAttribut([Attr::LOOP => null]);
    }
}