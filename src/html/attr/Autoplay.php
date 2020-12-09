<?php
namespace tekki\core\html\attr;
trait Autoplay{
    public function setAutoplay(){
        return $this->appendAttribut([Attr::AUTOPLAY => null]);
    }
}