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
		return $this->appendAttribut([Attr::DRAGGABLE => $mode]);
	}
	public function setDraggableTrue() {
		return $this->setDraggable(Attr::DRAGGABLE_TRUE);
	}
	public function setDraggableFalse() {
		return $this->setDraggable(Attr::DRAGGABLE_FALSE);
	}
	public function setDraggableAuto() {
		return $this->setDraggable(Attr::DRAGGABLE_AUTO);
	}
}