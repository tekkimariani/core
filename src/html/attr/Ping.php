<?php
namespace tekki\core\html\attr;
trait Ping{
    public function setPing($urllist){
        return $this->appendAttribut([Attr::PING => $urllist]);
    }
}