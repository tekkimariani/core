<?php
namespace tekki\core\html\attr;
trait Type{
    public function setType($type){
        $this->appendAttribut([Attr::TYPE => $type]);
    } 
    public function setTypeButton() {
        $this->setType(Attr::TYPE_BUTTON);
    }
    public function setTypeCheckbox() {
        $this->setType(Attr::TYPE_CHECKBOX);
    }
    public function setTypeColor() {
        $this->setType(Attr::TYPE_COLOR);
    }
    public function setTypeDate() {
        $this->setType(Attr::TYPE_DATE);
    }
    public function setTypeDatetimeLocal() {
        $this->setType(Attr::TYPE_DATETIME_LOCAL);
    }
    public function setTypeEmail() {
        $this->setType(Attr::TYPE_EMAIL);
    }
    public function setTypeFile() {
        $this->setType(Attr::TYPE_FILE);
    }
    public function setTypeHidden() {
        $this->setType(Attr::TYPE_HIDDEN);
    }
    public function setTypeImage() {
        $this->setType(Attr::TYPE_IMAGE);
    }
    public function setTypeMonth() {
        $this->setType(Attr::TYPE_MONTH);
    }
    public function setTypeNumber() {
        $this->setType(Attr::TYPE_NUMBER);
    }
    public function setTypePassword() {
        $this->setType(Attr::TYPE_PASSWORD);
    }
    public function setTypeRadio() {
        $this->setType(Attr::TYPE_RADIO);
    }
    public function setTypeRange() {
        $this->setType(Attr::TYPE_RANGE);
    }
    public function setTypeReset() {
        $this->setType(Attr::TYPE_RESET);
    }
    public function setTypeSearch() {
        $this->setType(Attr::TYPE_SEARCH);
    }
    public function setTypeSubmit() {
        $this->setType(Attr::TYPE_SUBMIT);
    }
    public function setTypeTel() {
        $this->setType(Attr::TYPE_TEL);
    }
    public function setTypeText() {
        $this->setType(Attr::TYPE_TEXT);
    }
    public function setTypeTime() {
        $this->setType(Attr::TYPE_TIME);
    }
    public function setTypeUrl() {
        $this->setType(Attr::TYPE_URL);
    }
    public function setTypeWeek() {
        $this->setType(Attr::TYPE_WEEK);
    }
}