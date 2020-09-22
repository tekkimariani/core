<?php
namespace tekki\core\html\attr;
trait Span{
    public function setSpan(int $col){
        $this->appendAttribut([Attr::SPAN => $col]);
    }
}