<?php
namespace tekki\core\html\attr;
trait Async{
    public function setAsync(){
        $this->appendAttribut([Attr::ASYNC => null]);
    }
}