<?php
namespace tekki\core\html\attr;
trait Ping{
    public function setPing($urllist){
        $this->appendAttribut([Attr::PING => $urllist]);
    }
}