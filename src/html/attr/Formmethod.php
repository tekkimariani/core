<?php
namespace tekki\core\html\attr;
trait Formmethod {
    public function setFormmethod(string $method){
        $this->appendAttribut([Attr::FORMMETHOD => $method]);
    }
    public function setFormmethodGet() {
        $this->setFormmethod(Attr::FORMMETHOD_GET);
    }
    public function setFormmethodPost() {
        $this->setFormmethod(Attr::FORMMETHOD_POST);
    }

}