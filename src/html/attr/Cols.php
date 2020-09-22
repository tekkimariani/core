<?php
namespace tekki\core\html\attr;
trait Cols{
    public function setCols($number){
        $this->appendAttribut([Attr::COLS => $number]);
    }
}