<?php
namespace tekki\core\html\attr;
trait Scope{
    public function setScope($value){
        $this->appendAttribut([Attr::SCOPE => $value]);
    }
    public function setScopeCol(){
        $this->setScope(Attr::SCOPE_COL);
    }
    public function setScopeColgroup(){
        $this->setScope(Attr::SCOPE_COLGROUP);
    }
    public function setScopeRow(){
        $this->setScope(Attr::SCOPE_ROW);
    }
    public function setScopeRowgroup(){
        $this->setScope(Attr::SCOPE_ROWGROUP);
    }
}