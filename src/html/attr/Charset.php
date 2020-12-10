<?php
namespace tekki\core\html\attr;
trait Charset{
    public function setCharset(string $charset){
        return $this->appendAttribut([Attr::CHARSET => $charset]);
    }
    public function setCharsetUtf8() {
        return $this->setCharset(Attr::CHARSET_UTF_8);
    }
}