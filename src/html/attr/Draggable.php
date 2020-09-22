<?php
namespace tekki\core\html\attr;
trait Draggable{
	public function setDraggable(string $mode) {
		//	draggable
		//		Specifies whether an element is draggable or not
		//		<element draggable="true|false|auto">
		//		true	Specifies that the element is draggable
		//		false	Specifies that the element is not draggable
		//		auto	Uses the default behavior of the browser
		$this->appendAttribut([Attr::DRAGGABLE => $mode]);
	}
	public function setDraggableTrue() {
		$this->setDraggable(Attr::DRAGGABLE_TRUE);
	}
	public function setDraggableFalse() {
		$this->setDraggable(Attr::DRAGGABLE_FALSE);
	}
	public function setDraggableAuto() {
		$this->setDraggable(Attr::DRAGGABLE_AUTO);
	}
}