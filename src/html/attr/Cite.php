<?php
namespace tekki\core\html\attr;
trait Cite{
    public function setCite($url){
        $this->appendAttribut([Attr::CITE => $url]);
    }
}