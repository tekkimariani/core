<?php
namespace tekki\core\html\attr;
trait Optimum{
    public function setOptimum($value){
        $this->appendAttribut([Attr::OPTIMUM => $value]);
    }
}