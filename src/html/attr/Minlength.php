<?php
namespace tekki\core\html\attr;
trait Minlength{
    public function setMinlength($minlength){
        $this->appendAttribut([Attr::MINLENGTH => $minlength]);
    }
}