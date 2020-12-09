<?php
namespace tekki\core\html\attr;
trait Crossorigin{
    public function setCrossorigin(string $value){
        return $this->appendAttribut([Attr::CROSSORIGIN => $value]);
    }
    public function setCrossoriginAnonymous(){
        return $this->setCrossorigin(Attr::CROSSORIGIN_ANONYMOUS);
    }
    public function setCrossoriginUseCredentials(){
        return $this->setCrossorigin(Attr::CROSSORIGIN_USE_CREDENTIALS);
    }
}