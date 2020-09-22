<?php
namespace tekki\core\html\attr;
trait Poster{
    public function setPoster($value){
        $this->appendAttribut([Attr::POSTER => $value]);
    }
}