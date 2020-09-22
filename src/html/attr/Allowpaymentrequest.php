<?php
namespace tekki\core\html\attr;
trait Allowpaymentrequest{
    public function setAllowpaymentrequest(string $value){
        $this->appendAttribut([Attr::ALLOWPAYMENTREQUEST => $value]);
    }
    public function setAllowpaymentrequestTrue(){
        $this->setAllowpaymentrequest(Attr::ALLOWPAYMENTREQUEST_TRUE);
    }
    public function setAllowpaymentrequestFalse(){
        $this->setAllowpaymentrequest(Attr::ALLOWPAYMENTREQUEST_FALSE);
    }
}