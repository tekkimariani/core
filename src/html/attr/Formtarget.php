<?php
namespace tekki\core\html\attr;
trait Formtarget {
    public function setFormtarget(string $target){
        $this->appendAttribut([Attr::FORMTARGET => $target]);
    }
    public function setFormtargetBlank() {
        $this->setFormtarget(Attr::FORMTARGET_BLANK);
    }
    public function setFormtargetParent() {
        $this->setFormtarget(Attr::FORMTARGET_PARENT);
    }
    public function setFormtargetSelf() {
        $this->setFormtarget(Attr::FORMTARGET_SELF);
    }
    public function setFormtargetTop() {
        $this->setFormtarget(Attr::FORMTARGET_TOP);
    }
}