<?php
namespace tekki\core\html\attr;
trait HttpEquiv{
    public function setHttpEquiv($value){
        return $this->appendAttribut([Attr::HTTP_EQUIV => $value]);
    }
}