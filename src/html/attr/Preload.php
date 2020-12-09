<?php
namespace tekki\core\html\attr;
trait Preload{
    public function setPreload($value){
        return $this->appendAttribut([Attr::PRELOAD => $value]);
    }
    public function setPreloadAuto(){
        return $this->setPreload(Attr::PRELOAD_AUTO);
    }
    public function setPreloadMetadata(){
        return $this->setPreload(Attr::PRELOAD_METADATA);
    }
    public function setPreloadNone(){
        return $this->setPreload(Attr::PRELOAD_NONE);
    }
}