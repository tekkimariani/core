<?php
namespace tekki\core\html\attr;
trait _List{
    public function setList(string $id){
        $this->appendAttribut([Attr::LIST => $id]);
    }
}