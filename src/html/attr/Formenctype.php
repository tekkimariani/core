<?php
namespace tekki\core\html\attr;
trait Formenctype{
    public function setFormenctype(string $enctype){
        return $this->appendAttribut([Attr::FORMENCTYPE => $enctype]);
    }
    public function setFormenctypeApplicationXwwwFormData() {
        return $this->setFormenctype(Attr::FORMENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED);
    }
    public function setFormenctypeMultipartFormData() {
        return $this->setFormenctype(Attr::FORMENCTYPE_MULTIPART_FORM_DATA);
    }
    public function setFormenctypeTextPlain() {
        return $this->setFormenctype(Attr::FORMENCTYPE_TEXT_PLAIN);
    }
}