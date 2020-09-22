<?php
namespace tekki\core\html\attr;
trait Wrap{
    public function setWrap($value){
        $this->appendAttribut([Attr::WRAP => $value]);
    }
    public function setWrapHard(){
        $this->setWrap(Attr::WRAP_HARD);
    }
    public function setWrapSoft(){
        $this->setWrap(Attr::WRAP_SOFT);
    }
}