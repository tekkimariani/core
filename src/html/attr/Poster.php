<?php
namespace tekki\core\html\attr;
trait Poster{
    public function setPoster($value){
        return $this->appendAttribut([Attr::POSTER => $value]);
    }
}