<?php
namespace tekki\core\html\attr;
trait Longdesc{
    public function setLongdesc(string $url){
        $this->appendAttribut([Attr::LONGDESC => $url]);
    }
}