<?php
namespace tekki\core\html\attr;
trait Minlength{
    public function setMinlength($minlength){
        return $this->appendAttribut([Attr::MINLENGTH => $minlength]);
    }
}