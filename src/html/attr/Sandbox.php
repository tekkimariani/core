<?php
namespace tekki\core\html\attr;
trait Sandbox{
    public function setSandbox(string $value){
        $this->appendAttribut([Attr::SANDBOX => $value]);
    }
    public function setSandboxAllowForms(){
        $this->setSandbox(Attr::SANDBOX_ALLOW_FORMS);
    }
    public function setSandboxAllowModals(){
        $this->setSandbox(Attr::SANDBOX_ALLOW_MODALS);
    }
    public function setSandboxAllowOrientationLock(){
        $this->setSandbox(Attr::SANDBOX_ALLOW_ORIENTATION_LOCK);
    }
    public function setSandboxAllowPointerLock(){
        $this->setSandbox(Attr::SANDBOX_ALLOW_POINTER_LOCK);
    }
    public function setSandboxAllowPopups(){
        $this->setSandbox(Attr::SANDBOX_ALLOW_POPUPS);
    }
    public function setSandboxAllowPopupsToEscapeSandbox(){
        $this->setSandbox(Attr::SANDBOX_ALLOW_POPUPS_TO_ESCAPE_SANDBOX);
    }
    public function setSandboxAllowPresentation(){
        $this->setSandbox(Attr::SANDBOX_ALLOW_PRESENTATION);
    }
    public function setSandboxAllowSameOrigin(){
        $this->setSandbox(Attr::SANDBOX_ALLOW_SAME_ORIGIN);
    }
    public function setSandboxAllowScripts(){
        $this->setSandbox(Attr::SANDBOX_ALLOW_SCRIPTS);
    }
    public function setSandboxAllowTopNavigation(){
        $this->setSandbox(Attr::SANDBOX_ALLOW_TOP_NAVIGATION);
    }
    public function setSandboxAllowTopNavigationByUserActivation(){
        $this->setSandbox(Attr::SANDBOX_ALLOW_TOP_NAVIGATION_BY_USER_ACTIVATION);
    }
}