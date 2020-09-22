<?php
namespace tekki\core\html\attr;
trait Dir{
	public function setDir(string $direction) {
		//	dir
		//		Specifies the text direction for the content in an element
		//		<element dir="ltr|rtl|auto">
		//		ltr		Default. Left-to-right text direction
		//		rtl		Right-to-left text direction
		//		auto	Let the browser figure out the text direction, based on the content (only recommended if the text direction is unknown)
		$this->appendAttribut([Attr::DIR => $direction]);
	}
	public function setDirLtr(){
		$this->setDir(Attr::DIR_LTR);
	}
	public function setDirRtl(){
		$this->setDir(Attr::DIR_RTL);
	}
	public function setDirAuto(){
		$this->setDir(Attr::DIR_AUTO);
	}
}