<?php
namespace tekki\core\html\attr;
trait Allowfullscreen{
    public function setAllowfullscreen(string $value){
        return $this->appendAttribut([Attr::ALLOWFULLSCREEN => $value]);
    }
    public function setAllowfullscreenTrue(){
        return $this->setAllowfullscreen(Attr::ALLOWFULLSCREEN_TRUE);
    }
    public function setAllowfullscreenFalse(){
        return $this->setAllowfullscreen(Attr::ALLOWFULLSCREEN_FALSE);
    }
}