<?php
namespace tekki\core\html\attr;
trait Min{
    public function setMin($min){
        $this->appendAttribut([Attr::MIN => $min]);
    }
}