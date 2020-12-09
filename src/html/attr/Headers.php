<?php
namespace tekki\core\html\attr;
trait Headers{
    public function setHeaders($id){
        return $this->appendAttribut([Attr::HEADERS => $id]);
    }
}