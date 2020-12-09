<?php
namespace tekki\core\html\attr;
trait Formaction{
    public function setFormaction(string $url){
        return $this->appendAttribut([Attr::FORMACTION => $url]);
    }
}