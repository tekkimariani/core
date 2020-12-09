<?php
namespace tekki\core\html\attr;
trait Start{
    public function setStart($start){
        return $this->appendAttribut([Attr::START => $start]);
    }
}