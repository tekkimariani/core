<?php
namespace tekki\core\html\attr;
trait Coords{
    public function setCoords($coords){
        $this->appendAttribut([Attr::COORDS => $coords]);
    }
}