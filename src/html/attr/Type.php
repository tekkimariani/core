<?php
namespace tekki\core\html\attr;
trait Type{
    public function setType($type){
        return $this->appendAttribut([Attr::TYPE => $type]);
    } 
    public function setTypeButton() {
        return $this->setType(Attr::TYPE_BUTTON);
    }
    public function setTypeCheckbox() {
        return $this->setType(Attr::TYPE_CHECKBOX);
    }
    public function setTypeColor() {
        return $this->setType(Attr::TYPE_COLOR);
    }
    public function setTypeDate() {
        return $this->setType(Attr::TYPE_DATE);
    }
    public function setTypeDatetimeLocal() {
        return $this->setType(Attr::TYPE_DATETIME_LOCAL);
    }
    public function setTypeEmail() {
        return $this->setType(Attr::TYPE_EMAIL);
    }
    public function setTypeFile() {
        return $this->setType(Attr::TYPE_FILE);
    }
    public function setTypeHidden() {
        return $this->setType(Attr::TYPE_HIDDEN);
    }
    public function setTypeImage() {
        return $this->setType(Attr::TYPE_IMAGE);
    }
    public function setTypeMonth() {
        return $this->setType(Attr::TYPE_MONTH);
    }
    public function setTypeNumber() {
        return $this->setType(Attr::TYPE_NUMBER);
    }
    public function setTypePassword() {
        return $this->setType(Attr::TYPE_PASSWORD);
    }
    public function setTypeRadio() {
        return $this->setType(Attr::TYPE_RADIO);
    }
    public function setTypeRange() {
        return $this->setType(Attr::TYPE_RANGE);
    }
    public function setTypeReset() {
        return $this->setType(Attr::TYPE_RESET);
    }
    public function setTypeSearch() {
        return $this->setType(Attr::TYPE_SEARCH);
    }
    public function setTypeSubmit() {
        return $this->setType(Attr::TYPE_SUBMIT);
    }
    public function setTypeTel() {
        return $this->setType(Attr::TYPE_TEL);
    }
    public function setTypeText() {
        return $this->setType(Attr::TYPE_TEXT);
    }
    public function setTypeTime() {
        return $this->setType(Attr::TYPE_TIME);
    }
    public function setTypeUrl() {
        return $this->setType(Attr::TYPE_URL);
    }
    public function setTypeWeek() {
        return $this->setType(Attr::TYPE_WEEK);
    }
}