<?php
namespace tekki\core\html\attr;
trait Formmethod {
    public function setFormmethod(string $method){
        return $this->appendAttribut([Attr::FORMMETHOD => $method]);
    }
    public function setFormmethodGet() {
        return $this->setFormmethod(Attr::FORMMETHOD_GET);
    }
    public function setFormmethodPost() {
        return $this->setFormmethod(Attr::FORMMETHOD_POST);
    }

}