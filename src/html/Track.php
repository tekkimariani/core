<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{_Default, Kind, Label, Src, Srclang};
class Track extends HTMLElement {
    use EventAttributes;
    use _Default;
    use Kind;
    use Label;
    use Src;
    use Srclang;
    public const DEFAULT = Attr::DEFAULT;
    public const KIND = Attr::KIND;
    public const KIND_CAPTIONS = Attr::KIND_CAPTIONS;
    public const KIND_CHAPTERS = Attr::KIND_CHAPTERS;
    public const KIND_DESCRIPTIONS = Attr::KIND_DESCRIPTIONS;
    public const KIND_METADATA = Attr::KIND_METADATA;
    public const KIND_SUBTITLES = Attr::KIND_SUBTITLES;
    public const LABEL = Attr::LABEL;
    public const SRC = Attr::SRC;
    public const SRCLANG = Attr::SRCLANG;
    protected $name = 'track';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
