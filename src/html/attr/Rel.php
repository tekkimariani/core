<?php
namespace tekki\core\html\attr;
trait Rel{
    public function setRel(string $rel){
        $this->appendAttribut([Attr::REL => $rel]);
    }
    public function setRelAlternate() {
        $this->setRel(Attr::REL_ALTERNATE);
    }
    public function setRelAuthor() {
        $this->setRel(Attr::REL_AUTHOR);
    }
    public function setRelBookmark() {
        $this->setRel(Attr::REL_BOOKMARK);
    }
    public function setRelDnsPrefetch() {
        $this->setRel(Attr::REL_DNS_PREFETCH);
    }
    public function setRelExternal() {
        $this->setRel(Attr::REL_EXTERNAL);
    }
    public function setRelHelp() {
        $this->setRel(Attr::REL_HELP);
    }
    public function setRelIcon() {
        $this->setRel(Attr::REL_ICON);
    }
    public function setRelLicense() {
        $this->setRel(Attr::REL_LICENSE);
    }
    public function setRelNext() {
        $this->setRel(Attr::REL_NEXT);
    }
    public function setRelNofollow() {
        $this->setRel(Attr::REL_NOFOLLOW);
    }
    public function setRelNoreferrer() {
        $this->setRel(Attr::REL_NOREFERRER);
    }    
    public function setRelNoopener() {
        $this->setRel(Attr::REL_NOOPENER);
    }
    public function attrRelOpener() {
        $this->setRel(Attr::REL_OPENER);
    }
    public function setRelPingback() {
        $this->setRel(Attr::REL_PINGBACK);
    }
    public function setRelPreconnect() {
        $this->setRel(Attr::REL_PRECONNECT);
    }
    public function setRelPrefetch() {
        $this->setRel(Attr::REL_PREFETCH);
    }
    public function setRelPreload() {
        $this->setRel(Attr::REL_PRELOAD);
    }
    public function setRelPrerender() {
        $this->setRel(Attr::REL_PRERENDER);
    }
    public function setRelPrev() {
        $this->setRel(Attr::REL_PREV);
    }
    public function setRelSearch() {
        $this->setRel(Attr::REL_SEARCH);
    }
    public function setRelStylesheet() {
        $this->setRel(Attr::REL_STYLESHEET);
    }
    public function setRelTag() {
        $this->setRel(Attr::REL_TAG);
    }
}