<?php
namespace tekki\core\html\attr;
trait Style{
	public function setStyle(string $style) {
		//	style
		//		Specifies an inline CSS style for an element
		//		<element style="style_definitions">
		//		One or more CSS properties and values separated by semicolons (e.g. style="color:blue;text-align:center")
		$this->appendAttribut([Attr::STYLE => $style]);
	}
}