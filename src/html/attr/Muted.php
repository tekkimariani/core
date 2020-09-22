<?php
namespace tekki\core\html\attr;
trait Muted{
    public function setMuted(){
        $this->appendAttribut([Attr::MUTED => null]);
    }
}