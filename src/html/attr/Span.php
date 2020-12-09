<?php
namespace tekki\core\html\attr;
trait Span{
    public function setSpan(int $col){
        return $this->appendAttribut([Attr::SPAN => $col]);
    }
}