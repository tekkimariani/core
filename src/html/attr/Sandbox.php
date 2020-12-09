<?php
namespace tekki\core\html\attr;
trait Sandbox{
    public function setSandbox(string $value){
        return $this->appendAttribut([Attr::SANDBOX => $value]);
    }
    public function setSandboxAllowForms(){
        return $this->setSandbox(Attr::SANDBOX_ALLOW_FORMS);
    }
    public function setSandboxAllowModals(){
        return $this->setSandbox(Attr::SANDBOX_ALLOW_MODALS);
    }
    public function setSandboxAllowOrientationLock(){
        return $this->setSandbox(Attr::SANDBOX_ALLOW_ORIENTATION_LOCK);
    }
    public function setSandboxAllowPointerLock(){
        return $this->setSandbox(Attr::SANDBOX_ALLOW_POINTER_LOCK);
    }
    public function setSandboxAllowPopups(){
        return $this->setSandbox(Attr::SANDBOX_ALLOW_POPUPS);
    }
    public function setSandboxAllowPopupsToEscapeSandbox(){
        return $this->setSandbox(Attr::SANDBOX_ALLOW_POPUPS_TO_ESCAPE_SANDBOX);
    }
    public function setSandboxAllowPresentation(){
        return $this->setSandbox(Attr::SANDBOX_ALLOW_PRESENTATION);
    }
    public function setSandboxAllowSameOrigin(){
        return $this->setSandbox(Attr::SANDBOX_ALLOW_SAME_ORIGIN);
    }
    public function setSandboxAllowScripts(){
        return $this->setSandbox(Attr::SANDBOX_ALLOW_SCRIPTS);
    }
    public function setSandboxAllowTopNavigation(){
        return $this->setSandbox(Attr::SANDBOX_ALLOW_TOP_NAVIGATION);
    }
    public function setSandboxAllowTopNavigationByUserActivation(){
        return $this->setSandbox(Attr::SANDBOX_ALLOW_TOP_NAVIGATION_BY_USER_ACTIVATION);
    }
}