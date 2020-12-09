<?php
namespace tekki\core\html\attr;
trait Optimum{
    public function setOptimum($value){
        return $this->appendAttribut([Attr::OPTIMUM => $value]);
    }
}