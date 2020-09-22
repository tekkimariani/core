<?php
namespace tekki\core\html\attr;
trait Step{
    public function setStep($step){
        $this->appendAttribut([Attr::STEP => $step]);
    }
}