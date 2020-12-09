<?php
namespace tekki\core\html\attr;
trait Dirname{
    public function setDirname(string $dirname){
        return $this->appendAttribut([Attr::DIRNAME => $dirname]);
    }
}