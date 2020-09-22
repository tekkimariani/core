<?php
namespace tekki\core\html\attr;
trait Form {
    public function setForm($formId){
        $this->appendAttribut([Attr::FORM => $formId]);
    }
}