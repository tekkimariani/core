<?php
namespace tekki\core\html\attr;
trait Content{
    public function setContent($content){
        $this->appendAttribut([Attr::CONTENT => $content]);
    }
}