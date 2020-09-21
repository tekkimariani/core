<?php
require_once './vendor/autoload.php';
use tekki\core\html\HTML;
$html = new HTML();
$body = $html->body();
$img = $body->img();
$img->setSrc('pic/ohne_gentechnik.jpg');
$img->setClass('fu');
// $img->attrWidth('100px');
// $img->attrHeight('100px');
// $img->attrAlt('Bioland');
