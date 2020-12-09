<?php
namespace tekki\core\html\attr;
trait Kind{
    public function setKind($value){
        return $this->appendAttribut([Attr::KIND => $value]);
    }
    public function setKindCaptions(){
        return $this->setKind(Attr::KIND_CAPTIONS);
    }
    public function setKindChapters(){
        return $this->setKind(Attr::KIND_CHAPTERS);
    }
    public function setKindDescriptions(){
        return $this->setKind(Attr::KIND_DESCRIPTIONS);
    }
    public function setKindMetadata(){
        return $this->setKind(Attr::KIND_METADATA);
    }
    public function setKindSubtitles(){
        return $this->setKind(Attr::KIND_SUBTITLES);
    }
}