<?php
namespace tekki\core\html\attr;
trait Href{
    public function setHref($url){
        $this->appendAttribut([Attr::HREF => $url]);
    }
}