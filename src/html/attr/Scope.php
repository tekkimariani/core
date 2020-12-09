<?php
namespace tekki\core\html\attr;
trait Scope{
    public function setScope($value){
        return $this->appendAttribut([Attr::SCOPE => $value]);
    }
    public function setScopeCol(){
        return $this->setScope(Attr::SCOPE_COL);
    }
    public function setScopeColgroup(){
        return $this->setScope(Attr::SCOPE_COLGROUP);
    }
    public function setScopeRow(){
        return $this->setScope(Attr::SCOPE_ROW);
    }
    public function setScopeRowgroup(){
        return $this->setScope(Attr::SCOPE_ROWGROUP);
    }
}