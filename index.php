<?php
require_once './vendor/autoload.php';
use tekki\core\html\HTML;
use tekki\core\w3css\W3css as W3;
$html = new HTML();
$html->setLang('de');
$head = $html->head();
$head->meta()->setCharsetUtf8();
$head->meta()->setViewport();
$head->meta()->setAuthor('Authorname');
$head->meta()->setApplicationName('Applicationname');
$head->meta()->setDescription('This Application is for showing Texts or Images in a HTML-Format.');
$head->meta()->setKeywords('Composer PHP HTML5 Bibliothek');
$head->includeCSS('https://www.w3schools.com/w3css/4/w3.css');
$body = $html->body();
$body->setClass(W3::BLACK);
$header = $body->header();
$header->setClass(W3::BLUE_GREY);
$h1 = $header->h1();
$h1->setClass(W3::TEXT_DEEP_ORANGE);
$h1->text('Composer PHP HTML5 Bibliothek');
$div = $body->div();
$button = $div->button();
$button->setClass(W3::INPUT.W3::BLUE.W3::HOVER_AMBER);
$button->onClick('alert(\'Hello World\');');
$button->text('Press me!');
$main = $div->main();
$main->setClass(W3::DARK_GREY);
$main->text('Content');
$footer = $body->footer();
$footer->setClass(W3::BLUE_GREY);
$footer->text('Footer');
?>