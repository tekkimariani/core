<?php
namespace tekki\core\html\attr;
trait Maxlength{
    public function setMaxlength($maxlength){
        return $this->appendAttribut([Attr::MAXLENGTH => $maxlength]);
    }
}