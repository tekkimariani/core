<?php
namespace tekki\core\html\attr;
trait Novalidate{
    public function setNovalidate() {
        return $this->appendAttribut([Attr::NOVALIDATE => null]);
    }
}