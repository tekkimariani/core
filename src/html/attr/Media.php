<?php
namespace tekki\core\html\attr;
trait Media{
    public function setMedia($media){
        return $this->appendAttribut([Attr::MEDIA => $media]);
    }
}