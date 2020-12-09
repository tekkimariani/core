<?php
namespace tekki\core\html\attr;
trait Step{
    public function setStep($step){
        return $this->appendAttribut([Attr::STEP => $step]);
    }
}