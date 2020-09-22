<?php
namespace tekki\core\html\attr;
trait Headers{
    public function setHeaders($id){
        $this->appendAttribut([Attr::HEADERS => $id]);
    }
}