<?php
namespace tekki\core\html\attr;
trait Enctype{
    public function setEnctype($enctype) {
        return $this->appendAttribut([Attr::ENCTYPE => $enctype]);
    }
    public function setEnctypeApplicationXwwwFormData() {
        return $this->setEnctype(Attr::ENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED);
    }
    public function setEnctypeMultipartFormData() {
        return $this->setEnctype(Attr::ENCTYPE_MULTIPART_FORM_DATA);
    }
    public function setEnctypeTextPlain() {
        return $this->setEnctype(Attr::ENCTYPE_TEXT_PLAIN);
    }
}