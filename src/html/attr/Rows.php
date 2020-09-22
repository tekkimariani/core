<?php
namespace tekki\core\html\attr;
trait Rows{
    public function setRows($number){
        $this->appendAttribut([Attr::ROWS => $number]);
    }
}