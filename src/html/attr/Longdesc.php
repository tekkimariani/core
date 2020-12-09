<?php
namespace tekki\core\html\attr;
trait Longdesc{
    public function setLongdesc(string $url){
        return $this->appendAttribut([Attr::LONGDESC => $url]);
    }
}