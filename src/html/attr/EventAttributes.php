<?php
namespace tekki\core\html\attr;
trait EventAttributes{
    private function addEvent(string $name, string $script) {
        //	Event
        //		Specifies the location of the linked document
        //	    URL
        return $this->appendAttribut([$name => $script]);
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
        return $this->addEvent('onafterprint', $script);
    }
    public function onBeforeprint($script) {
        return $this->addEvent('onbeforeprint', $script);
    }
  
    public function onBeforeunload($script) {
        return $this->addEvent('onbeforeunload', $script);
    }
    public function onError($script) {
        return $this->addEvent('onerror', $script);
    }
    public function onHashchange($script) {
        return $this->addEvent('onhashchange', $script);
    }
    public function onLoad($script) {
        return $this->addEvent('onload', $script);
    }
    public function onMessage($script) {
        return $this->addEvent('onmessage', $script);
    }
    public function onOffline($script) {
        return $this->addEvent('onoffline', $script);
    }
    public function onOnline($script) {
        return $this->addEvent('ononline', $script);
    }
    public function onPagehide($script) {
        return $this->addEvent('onpagehide', $script);
    }

    public function onPageshow($script) {
        return $this->addEvent('onpageshow', $script);
    }
    public function onPopstate($script) {
        return $this->addEvent('onpopstate', $script);
    }
    public function onResize($script) {
        return $this->addEvent('onresize', $script);
    }
    public function onStorage($script) {
        return $this->addEvent('onstorage', $script);
    }
    public function onUnload($script) {
        return $this->addEvent('onunload', $script);
    }

    //  Form Event Attributes
    //  Events triggered by actions inside a HTML form (applies to almost all HTML elements, but is most used in form elements):
    public function onBlur($script) {
        return $this->addEvent('onblur', $script);
    }
    public function onChange($script) {
        return $this->addEvent('onchange', $script);
    }
    public function onContextmenu($script) {
        return $this->addEvent('oncontextmenu', $script);
    }
    public function onFocus($script) {
        return $this->addEvent('onfocus', $script);
    }
    public function onInput($script) {
        return $this->addEvent('oninput', $script);
    }
    public function onInvalid($script) {
        return $this->addEvent('oninvalid', $script);
    }
    public function onReset($script) {
        return $this->addEvent('onreset', $script);
    }
    public function onSearch($script) {
        return $this->addEvent('onsearch', $script);
    }
    public function onSelect($script) {
        return $this->addEvent('onselect', $script);
    }
    public function onSubmit($script) {
        return $this->addEvent('onsubmit', $script);
    }

    //  Keyboard Event Attributes
    public function onKeydown($script) {
        return $this->addEvent('onkeydown', $script);
    }
    public function onKeypress($script) {
        return $this->addEvent('onkeypress', $script);
    }
    public function onKeyup($script) {
        return $this->addEvent('onkeyup', $script);
    }

    //  Mouse Event Attributes
    public function onClick($script) {
        return $this->addEvent('onclick', $script);
    }
    public function onDblclick($script) {
        return $this->addEvent('ondblclick', $script);
    }
    public function onMousedown($script) {
        return $this->addEvent('onmousedown', $script);
    }
    public function onMousemove($script) {
        return $this->addEvent('onmousemove', $script);
    }
    public function onMouseout($script) {
        return $this->addEvent('onmouseout', $script);
    }
    public function onMouseover($script) {
        return $this->addEvent('onmouseover', $script);
    }
    public function onMouseup($script) {
        return $this->addEvent('onmouseup', $script);
    }
    public function onMouseWheel($script) {
        return $this->addEvent('onwheel', $script);
    }
    public function onWheel($script) {
        return $this->addEvent('onwheel', $script);
    } 
    
    //  Drag Event Attributes
    public function onDrag($script) {
        return $this->addEvent('ondrag', $script);
    }
    public function onDragend($script) {
        return $this->addEvent('ondragend', $script);
    }
    public function onDragenter($script) {
        return $this->addEvent('ondragenter', $script);
    }
    public function onDragleave($script) {
        return $this->addEvent('ondragleave', $script);
    }
    public function onDragover($script) {
        return $this->addEvent('ondragover', $script);
    }
    public function onDragstart($script) {
        return $this->addEvent('ondragstart', $script);
    }
    public function onDrop($script) {
        return $this->addEvent('ondrop', $script);
    }
    public function onScroll($script) {
        return $this->addEvent('onscroll', $script);
    }

    //  Clipboard Event Attributes
    public function onCopy($script) {
        return $this->addEvent('oncopy', $script);
    }
    public function onCut($script) {
        return $this->addEvent('oncut', $script);
    }
    public function onPaste($script) {
        return $this->addEvent('onpaste', $script);
    }

    //  Media Event Attributes
    // Events triggered by medias like videos, images and audio.
    // (applies to all HTML elements, but is most common in media elements, like <audio>, <embed>, <img>, <object>, and <video>)
    public function onAbort($script) {
        return $this->addEvent('onabort', $script);
    }
    public function onCanplay($script) {
        return $this->addEvent('oncanplay', $script);
    }
    public function onCanplaythrough($script) {
        return $this->addEvent('oncanplaythrough', $script);
    }
    public function onCuechange($script) {
        return $this->addEvent('oncuechange', $script);
    }
    public function onDurationchange($script) {
        return $this->addEvent('ondurationchange', $script);
    }
    public function onEmptied($script) {
        return $this->addEvent('onemptied', $script);
    }
    public function onEnded($script) {
        return $this->addEvent('onended', $script);
    }
    /*
    public function onError($script) {
        $this->addEvent('onerror', $script);
    }
    */
    public function onLoadeddata($script) {
        return $this->addEvent('onloadeddata', $script);
    }
    public function onLoadedmetadata($script) {
        return $this->addEvent('onloadedmetadata', $script);
    }
    public function onLoadstart($script) {
        return $this->addEvent('onloadstart', $script);
    }
    public function onPause($script) {
        return $this->addEvent('onpause', $script);
    }
    public function onPlay($script) {
        return $this->addEvent('onplay', $script);
    }
    public function onPlaying($script) {
        return $this->addEvent('onplaying', $script);
    }
    public function onProgress($script) {
        return $this->addEvent('onprogress', $script);
    }
    public function onRatechange($script) {
        return $this->addEvent('onratechange', $script);
    }

    public function onSeeked($script) {
        return $this->addEvent('onseeked', $script);
    }
    public function onSeeking($script) {
        return $this->addEvent('onseeking', $script);
    }
    public function onStalled($script) {
        return $this->addEvent('onstalled', $script);
    }
    public function onSuspend($script) {
        return $this->addEvent('onsuspend', $script);
    }
    public function onTimeupdate($script) {
        return $this->addEvent('ontimeupdate', $script);
    }
    public function onVolumechange($script) {
        return $this->addEvent('onvolumechange', $script);
    }
    public function onWaiting($script) {
        return $this->addEvent('onwaiting', $script);
    }


    //  Misc Event Attributes
    public function onToggle($script) {
        return $this->addEvent('ontoggle', $script);
    }
}