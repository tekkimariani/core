<?php
namespace tekki\core\html\attr;
trait Async{
    public function setAsync(){
        return $this->appendAttribut([Attr::ASYNC => null]);
    }
}