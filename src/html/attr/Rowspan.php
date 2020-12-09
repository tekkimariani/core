<?php
namespace tekki\core\html\attr;
trait Rowspan{
    public function setRowspan($number){
        return $this->appendAttribut([Attr::ROWSPAN => $number]);
    }
}