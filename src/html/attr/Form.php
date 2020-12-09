<?php
namespace tekki\core\html\attr;
trait Form {
    public function setForm($formId){
        return $this->appendAttribut([Attr::FORM => $formId]);
    }
}