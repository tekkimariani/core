<?php
namespace tekki\core\html\attr;
trait Checked{
    public function setChecked(){
        $this->appendAttribut([Attr::CHECKED => null]);
    }
}