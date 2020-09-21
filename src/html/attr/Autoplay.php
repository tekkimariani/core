<?php
namespace tekki\core\html\attr;
trait Autoplay{
    public function setAutoplay(){
        $this->appendAttribut([Attr::AUTOPLAY => null]);
    }
}