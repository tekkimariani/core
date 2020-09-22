<?php
namespace tekki\core\html\attr;
trait Usemap{
    public function setUsemap(string $mapname){
        $this->appendAttribut([Attr::USEMAP => $mapname]);
    }
}