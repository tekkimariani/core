<?php
namespace tekki\core\html;
use \DOMDocument;
use \DOMElement;
use tekki\core\html\dom\HTMLElement;
use tekki\core\html\attr\{EventAttributes, Attr};
use tekki\core\html\attr\{Allow, Allowfullscreen, Allowpaymentrequest, Height, Name, Referrerpolicy, Sandbox, Src, Srcdoc, Width};
class Iframe extends HTMLElement {
    use EventAttributes;
    use Allow;
    use Allowfullscreen;
    use Allowpaymentrequest;
    use Height;
    use Name;
    use Referrerpolicy;
    use Sandbox;
    use Src;
    use Srcdoc;
    use Width;
    public const ALLOW                                              = Attr::ALLOW;
    public const ALLOWFULLSCREEN                                    = Attr::ALLOWFULLSCREEN;
    public const ALLOWFULLSCREEN_TRUE                               = Attr::ALLOWFULLSCREEN_TRUE;
    public const ALLOWFULLSCREEN_FALSE                              = Attr::ALLOWFULLSCREEN_FALSE;
    public const ALLOWPAYMENTREQUEST                                = Attr::ALLOWPAYMENTREQUEST;
    public const ALLOWPAYMENTREQUEST_TRUE                           = Attr::ALLOWPAYMENTREQUEST_TRUE;
    public const ALLOWPAYMENTREQUEST_FALSE                          = Attr::ALLOWPAYMENTREQUEST_FALSE;
    public const HEIGHT                                             = Attr::HEIGHT;
    public const NAME                                               = Attr::NAME;
    public const REFERRERPOLICY                                     = Attr::REFERRERPOLICY;
    public const REFERRERPOLICY_NO_REFERRER                         = Attr::REFERRERPOLICY_NO_REFERRER;
    public const REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE          = Attr::REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE;
    public const REFERRERPOLICY_ORIGIN                              = Attr::REFERRERPOLICY_ORIGIN;
    public const REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN            = Attr::REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN;
    public const REFERRERPOLICY_SAME_ORIGIN                         = Attr::REFERRERPOLICY_SAME_ORIGIN;
    public const REFERRERPOLICY_STRICT_ORIGIN                       = Attr::REFERRERPOLICY_STRICT_ORIGIN;
    public const REFERRERPOLICY_STRICT_ORIGIN_WHEN_CROSS_ORIGIN     = Attr::REFERRERPOLICY_STRICT_ORIGIN_WHEN_CROSS_ORIGIN;
    public const REFERRERPOLICY_UNSAFE_URL                          = Attr::REFERRERPOLICY_UNSAFE_URL;
    public const SANDBOX                                            = Attr::SANDBOX;
    public const SANDBOX_ALLOW_FORMS                                = Attr::SANDBOX_ALLOW_FORMS;
    public const SANDBOX_ALLOW_MODALS                               = Attr::SANDBOX_ALLOW_MODALS;
    public const SANDBOX_ALLOW_ORIENTATION_LOCK                     = Attr::SANDBOX_ALLOW_ORIENTATION_LOCK;
    public const SANDBOX_ALLOW_POINTER_LOCK                         = Attr::SANDBOX_ALLOW_POINTER_LOCK;
    public const SANDBOX_ALLOW_POPUPS                               = Attr::SANDBOX_ALLOW_POPUPS;
    public const SANDBOX_ALLOW_POPUPS_TO_ESCAPE_SANDBOX             = Attr::SANDBOX_ALLOW_POPUPS_TO_ESCAPE_SANDBOX;
    public const SANDBOX_ALLOW_PRESENTATION                         = Attr::SANDBOX_ALLOW_PRESENTATION;
    public const SANDBOX_ALLOW_SAME_ORIGIN                          = Attr::SANDBOX_ALLOW_SAME_ORIGIN;
    public const SANDBOX_ALLOW_SCRIPTS                              = Attr::SANDBOX_ALLOW_SCRIPTS;
    public const SANDBOX_ALLOW_TOP_NAVIGATION                       = Attr::SANDBOX_ALLOW_TOP_NAVIGATION;
    public const SANDBOX_ALLOW_TOP_NAVIGATION_BY_USER_ACTIVATION    = Attr::SANDBOX_ALLOW_TOP_NAVIGATION_BY_USER_ACTIVATION;
    public const SRC                                                = Attr::SRC;
    public const SRCDOC                                             = Attr::SRCDOC;
    public const WIDTH                                              = Attr::WIDTH;
    protected $name = 'iframe';
    public function __construct(DOMDocument $doc=null, DOMElement $container=null, array $attr=[], string $content=null){
        return parent::__construct($this->name, $doc, $container, $attr, $content);
    }
}
