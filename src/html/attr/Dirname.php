<?php
namespace tekki\core\html\attr;
trait Dirname{
    public function setDirname(string $dirname){
        $this->appendAttribut([Attr::DIRNAME => $dirname]);
    }
}