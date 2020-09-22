<?php
namespace tekki\core\html\attr;
trait Maxlength{
    public function setMaxlength($maxlength){
        $this->appendAttribut([Attr::MAXLENGTH => $maxlength]);
    }
}