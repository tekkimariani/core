<?php
namespace tekki\core\html\attr;
trait From{
    public function setFrom($id){
        return $this->appendAttribut([Attr::FROM => $id]);
    }
}