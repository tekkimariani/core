<?php
namespace tekki\core\html\attr;
trait Autocomplete{
    public function setAutocomplete($value){
        $this->appendAttribut([Attr::AUTOCOMPLETE => $value]);
    }
    public function setAutocompleteOn(){
        $this->setAutocomplete(Attr::AUTOCOMPLETE_ON);
    }
    public function setAutocompleteOff(){
        $this->setAutocomplete(Attr::AUTOCOMPLETE_OFF);
    }
}