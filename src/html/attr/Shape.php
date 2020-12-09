<?php
namespace tekki\core\html\attr;
trait Shape{
    public function setShape(string $shape){
        return $this->appendAttribut([Attr::SHAPE => $shape]);
    }  
    public function setShapeDefault() {
        return $this->setShape(Attr::SHAPE_DEFAULT);
    }
    public function setShapeRect() {
        return $this->setShape(Attr::SHAPE_RECT);
    }
    public function setShapeCircle() {
        return $this->setShape(Attr::SHAPE_CIRCLE);
    }
    public function setShapePoly() {
        return $this->setShape(Attr::SHAPE_POLY);
    }
}