<?php
namespace tekki\core\html\attr;
trait Enctype{
    public function setEnctype($enctype) {
        $this->appendAttribut([Attr::ENCTYPE => $enctype]);
    }
    public function setEnctypeApplicationXwwwFormData() {
        $this->setEnctype(Attr::ENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED);
    }
    public function setEnctypeMultipartFormData() {
        $this->setEnctype(Attr::ENCTYPE_MULTIPART_FORM_DATA);
    }
    public function setEnctypeTextPlain() {
        $this->setEnctype(Attr::ENCTYPE_TEXT_PLAIN);
    }
}