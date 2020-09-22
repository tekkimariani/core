<?php
namespace tekki\core\html\attr;
trait Hreflang{
    public function setHreflang($languagecode){
        $this->appendAttribut([Attr::HREFLANG => $languagecode]);
    }
}