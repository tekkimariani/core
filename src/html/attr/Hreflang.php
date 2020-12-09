<?php
namespace tekki\core\html\attr;
trait Hreflang{
    public function setHreflang($languagecode){
        return $this->appendAttribut([Attr::HREFLANG => $languagecode]);
    }
}