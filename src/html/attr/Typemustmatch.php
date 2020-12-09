<?php
namespace tekki\core\html\attr;
trait Typemustmatch{
    public function setTypemustmatch($value){
        return $this->appendAttribut([Attr::TYPEMUSTMATCH => $value]);
    }
    public function setTypemustmatchFalse(){
        return $this->setTypemustmatch(Attr::TYPEMUSTMATCH_FALSE);
    }
    public function setTypemustmatchTrue(){
        return $this->setTypemustmatch(Attr::TYPEMUSTMATCH_TRUE);
    }
}