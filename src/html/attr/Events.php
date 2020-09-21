<?php
namespace tekki\core\html\attr;
trait Src{
    private function addEvent(string $name, string $script) {
        //	Event
        //		Specifies the location of the linked document
        //	    URL
        $this->appendAttribut([$name => $script]);
    }

    /*
    // Elements with no clarity 
    // data !
    // head !
    // html !
    // meta !
    // noscript !
    // script !
    // svg ! ???
    // template !
    // title !

    */

    /*
    // Elements doesn't support the event attributes
    // base !
    // 
    */

    /*
    // Elements do support the event attributes
    // a =
    // abbr =
    // address =
    // area = 
    // article =
    // aside =
    // audio = 
    // b = 
    // bdi = 
    // bdo = 
    // blackquote = 
    // body = 
    // br = 
    // button
    // canvas
    // caption
    // cite
    // code
    // col
    // colgroup
    // datalist
    // dd
    // del
    // details
    // dfn
    // dialog
    // div
    // dl
    // dt
    // em
    // embed
    // fieldset
    // figcaption
    // figure
    // footer
    // form
    // h1
    // h2
    // h3
    // h4
    // h5
    // h6
    // header
    // hr
    // i
    // iframe
    // img
    // input
    // ins
    // kbd
    // label
    // legend
    // li
    // link =
    // main
    // map
    // mark
    // meter
    // nav
    // object
    // ol
    // optgroup
    // option
    // output
    // p
    // param
    // picture
    // pre
    // progress
    // q
    // rp
    // rt
    // ruby
    // s
    // samp
    // section
    // select
    // small
    // source
    // span
    // strong
    // style =
    // sub
    // summary
    // sup
    // table
    // tbody
    // td
    // textarea
    // tfoot
    // th
    // thead
    // time
    // tr
    // track
    // u
    // ul
    // var
    // video
    // wbr
    */

    // Full list of events? https://www.w3schools.com/jsref/dom_obj_event.asp


    // Window Event Attributes
    // Events triggered for the window object (applies to the <body> tag):
    public function onAfterprint($script) {
        $this->addEvent('onafterprint', $script);
    }
    public function onBeforeprint($script) {
        $this->addEvent('onbeforeprint', $script);
    }
  
    public function onBeforeunload($script) {
        $this->addEvent('onbeforeunload', $script);
    }
    public function onError($script) {
        $this->addEvent('onerror', $script);
    }
    public function onHashchange($script) {
        $this->addEvent('onhashchange', $script);
    }
    public function onLoad($script) {
        $this->addEvent('onload', $script);
    }
    public function onMessage($script) {
        $this->addEvent('onmessage', $script);
    }
    public function onOffline($script) {
        $this->addEvent('onoffline', $script);
    }
    public function onOnline($script) {
        $this->addEvent('ononline', $script);
    }
    public function onPagehide($script) {
        $this->addEvent('onpagehide', $script);
    }

    public function onPageshow($script) {
        $this->addEvent('onpageshow', $script);
    }
    public function onPopstate($script) {
        $this->addEvent('onpopstate', $script);
    }
    public function onResize($script) {
        $this->addEvent('onresize', $script);
    }
    public function onStorage($script) {
        $this->addEvent('onstorage', $script);
    }
    public function onUnload($script) {
        $this->addEvent('onunload', $script);
    }

    //  Form Event Attributes
    //  Events triggered by actions inside a HTML form (applies to almost all HTML elements, but is most used in form elements):
    public function onBlur($script) {
        $this->addEvent('onblur', $script);
    }
    public function onChange($script) {
        $this->addEvent('onchange', $script);
    }
    public function onContextmenu($script) {
        $this->addEvent('oncontextmenu', $script);
    }
    public function onFocus($script) {
        $this->addEvent('onfocus', $script);
    }
    public function onInput($script) {
        $this->addEvent('oninput', $script);
    }
    public function onInvalid($script) {
        $this->addEvent('oninvalid', $script);
    }
    public function onReset($script) {
        $this->addEvent('onreset', $script);
    }
    public function onSearch($script) {
        $this->addEvent('onsearch', $script);
    }
    public function onSelect($script) {
        $this->addEvent('onselect', $script);
    }
    public function onSubmit($script) {
        $this->addEvent('onsubmit', $script);
    }

    //  Keyboard Event Attributes
    public function onKeydown($script) {
        $this->addEvent('onkeydown', $script);
    }
    public function onKeypress($script) {
        $this->addEvent('onkeypress', $script);
    }
    public function onKeyup($script) {
        $this->addEvent('onkeyup', $script);
    }

    //  Mouse Event Attributes
    public function onClick($script) {
        $this->addEvent('onclick', $script);
    }
    public function onDblclick($script) {
        $this->addEvent('ondblclick', $script);
    }
    public function onMousedown($script) {
        $this->addEvent('onmousedown', $script);
    }
    public function onMousemove($script) {
        $this->addEvent('onmousemove', $script);
    }
    public function onMouseout($script) {
        $this->addEvent('onmouseout', $script);
    }
    public function onMouseover($script) {
        $this->addEvent('onmouseover', $script);
    }
    public function onMouseup($script) {
        $this->addEvent('onmouseup', $script);
    }
    public function onMouseWheel($script) {
        $this->addEvent('onwheel', $script);
    }
    public function onWheel($script) {
        $this->addEvent('onwheel', $script);
    } 
    
    //  Drag Event Attributes
    public function onDrag($script) {
        $this->addEvent('ondrag', $script);
    }
    public function onDragend($script) {
        $this->addEvent('ondragend', $script);
    }
    public function onDragenter($script) {
        $this->addEvent('ondragenter', $script);
    }
    public function onDragleave($script) {
        $this->addEvent('ondragleave', $script);
    }
    public function onDragover($script) {
        $this->addEvent('ondragover', $script);
    }
    public function onDragstart($script) {
        $this->addEvent('ondragstart', $script);
    }
    public function onDrop($script) {
        $this->addEvent('ondrop', $script);
    }
    public function onScroll($script) {
        $this->addEvent('onscroll', $script);
    }

    //  Clipboard Event Attributes
    public function onCopy($script) {
        $this->addEvent('oncopy', $script);
    }
    public function onCut($script) {
        $this->addEvent('oncut', $script);
    }
    public function onPaste($script) {
        $this->addEvent('onpaste', $script);
    }

    //  Media Event Attributes
    // Events triggered by medias like videos, images and audio.
    // (applies to all HTML elements, but is most common in media elements, like <audio>, <embed>, <img>, <object>, and <video>)
    public function onAbort($script) {
        $this->addEvent('onabort', $script);
    }
    public function onCanplay($script) {
        $this->addEvent('oncanplay', $script);
    }
    public function onCanplaythrough($script) {
        $this->addEvent('oncanplaythrough', $script);
    }
    public function onCuechange($script) {
        $this->addEvent('oncuechange', $script);
    }
    public function onDurationchange($script) {
        $this->addEvent('ondurationchange', $script);
    }
    public function onEmptied($script) {
        $this->addEvent('onemptied', $script);
    }
    public function onEnded($script) {
        $this->addEvent('onended', $script);
    }
    /*
    public function onError($script) {
        $this->addEvent('onerror', $script);
    }
    */
    public function onLoadeddata($script) {
        $this->addEvent('onloadeddata', $script);
    }
    public function onLoadedmetadata($script) {
        $this->addEvent('onloadedmetadata', $script);
    }
    public function onLoadstart($script) {
        $this->addEvent('onloadstart', $script);
    }
    public function onPause($script) {
        $this->addEvent('onpause', $script);
    }
    public function onPlay($script) {
        $this->addEvent('onplay', $script);
    }
    public function onPlaying($script) {
        $this->addEvent('onplaying', $script);
    }
    public function onProgress($script) {
        $this->addEvent('onprogress', $script);
    }
    public function onRatechange($script) {
        $this->addEvent('onratechange', $script);
    }

    public function onSeeked($script) {
        $this->addEvent('onseeked', $script);
    }
    public function onSeeking($script) {
        $this->addEvent('onseeking', $script);
    }
    public function onStalled($script) {
        $this->addEvent('onstalled', $script);
    }
    public function onSuspend($script) {
        $this->addEvent('onsuspend', $script);
    }
    public function onTimeupdate($script) {
        $this->addEvent('ontimeupdate', $script);
    }
    public function onVolumechange($script) {
        $this->addEvent('onvolumechange', $script);
    }
    public function onWaiting($script) {
        $this->addEvent('onwaiting', $script);
    }


    //  Misc Event Attributes
    public function onToggle($script) {
        $this->addEvent('ontoggle', $script);
    }
}