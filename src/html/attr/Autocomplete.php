<?php
namespace tekki\core\html\attr;
trait Autocomplete{
    public function setAutocomplete($value){
        return $this->appendAttribut([Attr::AUTOCOMPLETE => $value]);
    }
    public function setAutocompleteOn(){
        return $this->setAutocomplete(Attr::AUTOCOMPLETE_ON);
    }
    public function setAutocompleteOff(){
        return $this->setAutocomplete(Attr::AUTOCOMPLETE_OFF);
    }
}