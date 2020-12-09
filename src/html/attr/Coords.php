<?php
namespace tekki\core\html\attr;
trait Coords{
    public function setCoords($coords){
        return $this->appendAttribut([Attr::COORDS => $coords]);
    }
}