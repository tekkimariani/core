<?php
require_once './vendor/autoload.php';
use tekki\core\html\HTML;
$html = new HTML();
$body = $html->body();
$img = $body->img();
$img->setSrc('pic/ohne_gentechnik.jpg');
$img->setClass('fu');
$input = $body->input();
// $img->attrWidth('100px');
// $img->attrHeight('100px');
// $img->attrAlt('Bioland');
/*
    GlobalAttributes
    use Accesskey;
    use _Class;
    use Contenteditable;
    use DataCustom;
    use Dir;
    use Draggable;
    use Hidden;
    use Lang;
    use Spellcheck;
    use Style;
    use Tabindex;
    use Title;
    use Translate;
*/