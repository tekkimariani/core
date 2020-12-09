<?php
namespace tekki\core\html\attr;
trait Href{
    public function setHref($url){
        return $this->appendAttribut([Attr::HREF => $url]);
    }
}