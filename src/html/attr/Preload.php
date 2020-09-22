<?php
namespace tekki\core\html\attr;
trait Preload{
    public function setPreload($value){
        $this->appendAttribut([Attr::PRELOAD => $value]);
    }
    public function setPreloadAuto(){
        $this->setPreload(Attr::PRELOAD_AUTO);
    }
    public function setPreloadMetadata(){
        $this->setPreload(Attr::PRELOAD_METADATA);
    }
    public function setPreloadNone(){
        $this->setPreload(Attr::PRELOAD_NONE);
    }
}