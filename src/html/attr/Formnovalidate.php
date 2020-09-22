<?php
namespace tekki\core\html\attr;
trait Formnovalidate {
    public function setFormnovalidate(){
        $this->appendAttribut([Attr::FORMNOVALIDATE => null]);
    }
}