<?php
namespace tekki\core\html\attr;
trait Cite{
    public function setCite($url){
        return $this->appendAttribut([Attr::CITE => $url]);
    }
}