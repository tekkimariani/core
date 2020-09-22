<?php
namespace tekki\core\html\attr;
trait Allowfullscreen{
    public function setAllowfullscreen(string $value){
        $this->appendAttribut([Attr::ALLOWFULLSCREEN => $value]);
    }
    public function setAllowfullscreenTrue(){
        $this->setAllowfullscreen(Attr::ALLOWFULLSCREEN_TRUE);
    }
    public function setAllowfullscreenFalse(){
        $this->setAllowfullscreen(Attr::ALLOWFULLSCREEN_FALSE);
    }
}