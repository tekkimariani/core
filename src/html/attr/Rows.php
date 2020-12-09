<?php
namespace tekki\core\html\attr;
trait Rows{
    public function setRows($number){
        return $this->appendAttribut([Attr::ROWS => $number]);
    }
}