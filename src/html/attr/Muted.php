<?php
namespace tekki\core\html\attr;
trait Muted{
    public function setMuted(){
        return $this->appendAttribut([Attr::MUTED => null]);
    }
}