<?php
namespace tekki\core\html\attr;
trait Formnovalidate {
    public function setFormnovalidate(){
        return $this->appendAttribut([Attr::FORMNOVALIDATE => null]);
    }
}