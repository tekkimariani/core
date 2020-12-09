<?php
namespace tekki\core\html\attr;
trait Referrerpolicy{
    public function setReferrerpolicy($referrerpolicy){
        return $this->appendAttribut([Attr::REFERRERPOLICY => $referrerpolicy]);
    }
    public function setReferrerpolicyNoReferrer() {
        return $this->setReferrerpolicy(Attr::REFERRERPOLICY_NO_REFERRER);
    }
    public function setReferrerpolicyNoReferrerWhenDowngrade() {
        return $this->setReferrerpolicy(Attr::REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE);
    }
    public function setReferrerpolicyOrigin() {
        return $this->setReferrerpolicy(Attr::REFERRERPOLICY_ORIGIN);
    }
    public function setReferrerpolicyOriginWhenCrossOrigin() {
        return $this->setReferrerpolicy(Attr::REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN);
    }
    public function setReferrerpolicySameOrigin() {
        return $this->setReferrerpolicy(Attr::REFERRERPOLICY_SAME_ORIGIN);
    }
    public function setReferrerpolicyStrictOrigin() {
        return $this->setReferrerpolicy(Attr::REFERRERPOLICY_STRICT_ORIGIN);
    }
    public function setReferrerpolicyStrictOriginWhenCrossOrigin() {
        return $this->setReferrerpolicy(Attr::REFERRERPOLICY_STRICT_ORIGIN_WHEN_CROSS_ORIGIN);
    }
    public function setReferrerpolicyUnsaveUrl() {
        return $this->setReferrerpolicy(Attr::REFERRERPOLICY_UNSAFE_URL);
    }
}