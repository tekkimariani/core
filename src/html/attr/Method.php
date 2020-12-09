<?php
namespace tekki\core\html\attr;
trait Method{
    public function setMethod($method) {
        return $this->appendAttribut([Attr::METHOD => $method]);
    }
    public function setMethodGet() {
        return $this->setMethod(Attr::METHOD_GET);
    }
    public function setMethodPost() {
        return $this->setMethod(Attr::METHOD_POST);
    }
}