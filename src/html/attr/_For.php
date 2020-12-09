<?php
namespace tekki\core\html\attr;
trait _For{
    public function setFor($id){
        return $this->appendAttribut([Attr::FOR => $id]);
    }
}