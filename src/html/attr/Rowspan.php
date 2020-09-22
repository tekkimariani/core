<?php
namespace tekki\core\html\attr;
trait Rowspan{
    public function setRowspan($number){
        $this->appendAttribut([Attr::ROWSPAN => $number]);
    }
}