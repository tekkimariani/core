<?php
namespace tekki\core\html\attr;
trait Download{
    public function setDownload($filepath) {
        return $this->appendAttribut([Attr::DOWNLOAD => $filepath]);
    }
}