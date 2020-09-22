<?php
namespace tekki\core\html\attr;
trait Srcset{
    public function setSrcset(string $urllist){
        $this->appendAttribut([Attr::SRCSET => $urllist]);
    }
}