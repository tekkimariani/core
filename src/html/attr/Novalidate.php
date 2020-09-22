<?php
namespace tekki\core\html\attr;
trait Novalidate{
    public function setNovalidate() {
        $this->appendAttribut([Attr::NOVALIDATE => null]);
    }
}