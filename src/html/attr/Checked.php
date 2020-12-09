<?php
namespace tekki\core\html\attr;
trait Checked{
    public function setChecked(){
        return $this->appendAttribut([Attr::CHECKED => null]);
    }
}