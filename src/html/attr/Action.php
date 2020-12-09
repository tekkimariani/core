<?php
namespace tekki\core\html\attr;
trait Action{
    public function setAction($url){
        return $this->appendAttribut([Attr::ACTION => $url]);
    }
}