<?php
namespace tekki\core\html\attr;
trait Rel{
    public function setRel(string $rel){
        return $this->appendAttribut([Attr::REL => $rel]);
    }
    public function setRelAlternate() {
        return $this->setRel(Attr::REL_ALTERNATE);
    }
    public function setRelAuthor() {
        return $this->setRel(Attr::REL_AUTHOR);
    }
    public function setRelBookmark() {
        return $this->setRel(Attr::REL_BOOKMARK);
    }
    public function setRelDnsPrefetch() {
        return $this->setRel(Attr::REL_DNS_PREFETCH);
    }
    public function setRelExternal() {
        return $this->setRel(Attr::REL_EXTERNAL);
    }
    public function setRelHelp() {
        return $this->setRel(Attr::REL_HELP);
    }
    public function setRelIcon() {
        return $this->setRel(Attr::REL_ICON);
    }
    public function setRelLicense() {
        return $this->setRel(Attr::REL_LICENSE);
    }
    public function setRelNext() {
        return $this->setRel(Attr::REL_NEXT);
    }
    public function setRelNofollow() {
        return $this->setRel(Attr::REL_NOFOLLOW);
    }
    public function setRelNoreferrer() {
        return $this->setRel(Attr::REL_NOREFERRER);
    }    
    public function setRelNoopener() {
        return $this->setRel(Attr::REL_NOOPENER);
    }
    public function attrRelOpener() {
        return $this->setRel(Attr::REL_OPENER);
    }
    public function setRelPingback() {
        return $this->setRel(Attr::REL_PINGBACK);
    }
    public function setRelPreconnect() {
        return $this->setRel(Attr::REL_PRECONNECT);
    }
    public function setRelPrefetch() {
        return $this->setRel(Attr::REL_PREFETCH);
    }
    public function setRelPreload() {
        return $this->setRel(Attr::REL_PRELOAD);
    }
    public function setRelPrerender() {
        return $this->setRel(Attr::REL_PRERENDER);
    }
    public function setRelPrev() {
        return $this->setRel(Attr::REL_PREV);
    }
    public function setRelSearch() {
        return $this->setRel(Attr::REL_SEARCH);
    }
    public function setRelStylesheet() {
        return $this->setRel(Attr::REL_STYLESHEET);
    }
    public function setRelTag() {
        return $this->setRel(Attr::REL_TAG);
    }
}