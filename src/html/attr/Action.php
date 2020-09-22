<?php
namespace tekki\core\html\attr;
trait Action{
    public function setAction($url){
        $this->appendAttribut([Attr::ACTION => $url]);
    }
}