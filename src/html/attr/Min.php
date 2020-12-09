<?php
namespace tekki\core\html\attr;
trait Min{
    public function setMin($min){
        return $this->appendAttribut([Attr::MIN => $min]);
    }
}