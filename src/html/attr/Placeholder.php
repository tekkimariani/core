<?php
namespace tekki\core\html\attr;
trait Placeholder{
    public function setPlaceholder($text){
        $this->appendAttribut([Attr::PLACEHOLDER => $text]);
    }
}