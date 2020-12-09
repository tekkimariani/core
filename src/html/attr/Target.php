<?php
namespace tekki\core\html\attr;
trait Target{
    public function setTarget(string $target){
        return $this->appendAttribut([Attr::TARGET => $target]);
    }
    public function setTargetBlank() {
        return $this->setTarget(Attr::TARGET_BLANK);
    }
    public function setTargetParent() {
        return $this->setTarget(Attr::TARGET_PARENT);
    }
    public function setTargetSelf() {
        return $this->setTarget(Attr::TARGET_SELF);
    }
    public function setTargetTop() {
        return $this->setTarget(Attr::TARGET_TOP);
    }
}