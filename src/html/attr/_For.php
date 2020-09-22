<?php
namespace tekki\core\html\attr;
trait _For{
    public function setFor($id){
        $this->appendAttribut([Attr::FOR => $id]);
    }
}