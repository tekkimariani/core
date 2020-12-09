<?php
namespace tekki\core\html\attr;
trait Srcset{
    public function setSrcset(string $urllist){
        return $this->appendAttribut([Attr::SRCSET => $urllist]);
    }
}