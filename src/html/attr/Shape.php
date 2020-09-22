<?php
namespace tekki\core\html\attr;
trait Shape{
    public function setShape(string $shape){
        $this->appendAttribut([Attr::SHAPE => $shape]);
    }  
    public function setShapeDefault() {
        $this->setShape(Attr::SHAPE_DEFAULT);
    }
    public function setShapeRect() {
        $this->setShape(Attr::SHAPE_RECT);
    }
    public function setShapeCircle() {
        $this->setShape(Attr::SHAPE_CIRCLE);
    }
    public function setShapePoly() {
        $this->setShape(Attr::SHAPE_POLY);
    }
}