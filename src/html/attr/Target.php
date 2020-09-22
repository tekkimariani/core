<?php
namespace tekki\core\html\attr;
trait Target{
    public function setTarget(string $target){
        $this->appendAttribut([Attr::TARGET => $target]);
    }
    public function setTargetBlank() {
        $this->setTarget(Attr::TARGET_BLANK);
    }
    public function setTargetParent() {
        $this->setTarget(Attr::TARGET_PARENT);
    }
    public function setTargetSelf() {
        $this->setTarget(Attr::TARGET_SELF);
    }
    public function setTargetTop() {
        $this->setTarget(Attr::TARGET_TOP);
    }
}