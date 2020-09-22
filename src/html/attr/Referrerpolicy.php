<?php
namespace tekki\core\html\attr;
trait Referrerpolicy{
    public function setReferrerpolicy($referrerpolicy){
        $this->appendAttribut([Attr::REFERRERPOLICY => $referrerpolicy]);
    }
    public function setReferrerpolicyNoReferrer() {
        $this->setReferrerpolicy(Attr::REFERRERPOLICY_NO_REFERRER);
    }
    public function setReferrerpolicyNoReferrerWhenDowngrade() {
        $this->setReferrerpolicy(Attr::REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE);
    }
    public function setReferrerpolicyOrigin() {
        $this->setReferrerpolicy(Attr::REFERRERPOLICY_ORIGIN);
    }
    public function setReferrerpolicyOriginWhenCrossOrigin() {
        $this->setReferrerpolicy(Attr::REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN);
    }
    public function setReferrerpolicySameOrigin() {
        $this->setReferrerpolicy(Attr::REFERRERPOLICY_SAME_ORIGIN);
    }
    public function setReferrerpolicyStrictOrigin() {
        $this->setReferrerpolicy(Attr::REFERRERPOLICY_STRICT_ORIGIN);
    }
    public function setReferrerpolicyStrictOriginWhenCrossOrigin() {
        $this->setReferrerpolicy(Attr::REFERRERPOLICY_STRICT_ORIGIN_WHEN_CROSS_ORIGIN);
    }
    public function setReferrerpolicyUnsaveUrl() {
        $this->setReferrerpolicy(Attr::REFERRERPOLICY_UNSAFE_URL);
    }
}