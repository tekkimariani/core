<?php
namespace tekki\core\html\attr;
trait Typemustmatch{
    public function setTypemustmatch($value){
        $this->appendAttribut([Attr::TYPEMUSTMATCH => $value]);
    }
    public function setTypemustmatchFalse(){
        $this->setTypemustmatch(Attr::TYPEMUSTMATCH_FALSE);
    }
    public function setTypemustmatchTrue(){
        $this->setTypemustmatch(Attr::TYPEMUSTMATCH_TRUE);
    }
}