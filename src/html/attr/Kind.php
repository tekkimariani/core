<?php
namespace tekki\core\html\attr;
trait Kind{
    public function setKind($value){
        $this->appendAttribut([Attr::KIND => $value]);
    }
    public function setKindCaptions(){
        $this->setKind(Attr::KIND_CAPTIONS);
    }
    public function setKindChapters(){
        $this->setKind(Attr::KIND_CHAPTERS);
    }
    public function setKindDescriptions(){
        $this->setKind(Attr::KIND_DESCRIPTIONS);
    }
    public function setKindMetadata(){
        $this->setKind(Attr::KIND_METADATA);
    }
    public function setKindSubtitles(){
        $this->setKind(Attr::KIND_SUBTITLES);
    }
}