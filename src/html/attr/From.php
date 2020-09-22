<?php
namespace tekki\core\html\attr;
trait From{
    public function setFrom($id){
        $this->appendAttribut([Attr::FROM => $id]);
    }
}