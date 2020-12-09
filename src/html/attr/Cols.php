<?php
namespace tekki\core\html\attr;
trait Cols{
    public function setCols($number){
        return $this->appendAttribut([Attr::COLS => $number]);
    }
}