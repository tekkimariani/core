<?php
namespace tekki\core\html\attr;
trait Wrap{
    public function setWrap($value){
        return $this->appendAttribut([Attr::WRAP => $value]);
    }
    public function setWrapHard(){
        return $this->setWrap(Attr::WRAP_HARD);
    }
    public function setWrapSoft(){
        return $this->setWrap(Attr::WRAP_SOFT);
    }
}