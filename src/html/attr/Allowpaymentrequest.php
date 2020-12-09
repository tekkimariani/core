<?php
namespace tekki\core\html\attr;
trait Allowpaymentrequest{
    public function setAllowpaymentrequest(string $value){
        return $this->appendAttribut([Attr::ALLOWPAYMENTREQUEST => $value]);
    }
    public function setAllowpaymentrequestTrue(){
        return $this->setAllowpaymentrequest(Attr::ALLOWPAYMENTREQUEST_TRUE);
    }
    public function setAllowpaymentrequestFalse(){
        return $this->setAllowpaymentrequest(Attr::ALLOWPAYMENTREQUEST_FALSE);
    }
}