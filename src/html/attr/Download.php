<?php
namespace tekki\core\html\attr;
trait Download{
    public function setDownload($filepath) {
        $this->appendAttribut([Attr::DOWNLOAD => $filepath]);
    }
}