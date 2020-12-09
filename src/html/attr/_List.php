<?php
namespace tekki\core\html\attr;
trait _List{
    public function setList(string $id){
        return $this->appendAttribut([Attr::LIST => $id]);
    }
}