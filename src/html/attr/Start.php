<?php
namespace tekki\core\html\attr;
trait Start{
    public function setStart($start){
        $this->appendAttribut([Attr::START => $start]);
    }
}