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
$head->includeCSS('W3.css');
$body = $html->body();
$body->setClass(W3::BLACK);
$header = $body->header();
$header->setClass(W3::BLUE_GREY);
$h1 = $header->h1([], "Pah ")
    ->setClass(W3::TEXT_DEEP_ORANGE.W3::HOVER_AMBER)
    ->text('Composer PHP HTML5 Bibliothek');
$h1->text('Uff');
$div = $body->div();
$nav = $div->nav();
$nav->setClass(W3::LIGHT_BLUE);
$ul = $nav->ul();
$button = $ul->li()->button();
$button->onClick('alert(\'home\');');
$main = $div->main();
$main->setClass(W3::LIGHT_GREY);
$main->text('Content');
$footer = $body->footer();
$footer->setClass(W3::BLUE_GREY);
$footer->text('Footer');
$input = $body->input();
