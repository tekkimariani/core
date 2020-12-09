<?php
namespace tekki\core\html\attr;
trait Placeholder{
    public function setPlaceholder($text){
        return $this->appendAttribut([Attr::PLACEHOLDER => $text]);
    }
}