<?php
namespace tekki\core\html\attr;
trait Content{
    public function setContent($content){
        return $this->appendAttribut([Attr::CONTENT => $content]);
    }
}