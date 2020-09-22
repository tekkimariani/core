<?php
namespace tekki\core\html\attr;
trait Crossorigin{
    public function setCrossorigin(string $value){
        $this->appendAttribut([Attr::CROSSORIGIN => $value]);
    }
    public function setCrossoriginAnonymous(){
        $this->setCrossorigin(Attr::CROSSORIGIN_ANONYMOUS);
    }
    public function setCrossoriginUseCredentials(){
        $this->setCrossorigin(Attr::CROSSORIGIN_USE_CREDENTIALS);
    }
}