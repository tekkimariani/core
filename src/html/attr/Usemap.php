<?php
namespace tekki\core\html\attr;
trait Usemap{
    public function setUsemap(string $mapname){
        return $this->appendAttribut([Attr::USEMAP => $mapname]);
    }
}