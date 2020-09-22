<?php
namespace tekki\core\html\attr;
trait Method{
    public function setMethod($method) {
        $this->appendAttribut([Attr::METHOD => $method]);
    }
    public function setMethodGet() {
        $this->setMethod(Attr::METHOD_GET);
    }
    public function setMethodPost() {
        $this->setMethod(Attr::METHOD_POST);
    }
}