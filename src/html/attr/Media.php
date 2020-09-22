<?php
namespace tekki\core\html\attr;
trait Media{
    public function setMedia($media){
        $this->appendAttribut([Attr::MEDIA => $media]);
    }
}