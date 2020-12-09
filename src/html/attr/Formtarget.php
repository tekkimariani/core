<?php
namespace tekki\core\html\attr;
trait Formtarget {
    public function setFormtarget(string $target){
        return $this->appendAttribut([Attr::FORMTARGET => $target]);
    }
    public function setFormtargetBlank() {
        return $this->setFormtarget(Attr::FORMTARGET_BLANK);
    }
    public function setFormtargetParent() {
        return $this->setFormtarget(Attr::FORMTARGET_PARENT);
    }
    public function setFormtargetSelf() {
        return $this->setFormtarget(Attr::FORMTARGET_SELF);
    }
    public function setFormtargetTop() {
        return $this->setFormtarget(Attr::FORMTARGET_TOP);
    }
}