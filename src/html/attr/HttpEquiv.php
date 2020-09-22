<?php
namespace tekki\core\html\attr;
trait HttpEquiv{
    public function setHttpEquiv($value){
        $this->appendAttribut([Attr::HTTP_EQUIV => $value]);
    }
}