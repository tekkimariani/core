<?php
namespace tekki\core\html\attr;
class Attr{
    #accept	<input>	Specifies the types of files that the server accepts (only for type="file")
    public const ACCEPT = 'accept';
    #accept-charset	<form>	Specifies the character encodings that are to be used for the form submission
    public const ACCEPT_CHARSET = 'accept-charset';
    #accesskey	Global Attributes	Specifies a shortcut key to activate/focus an element
    public const ACCESSKEY = 'accesskey';
    #action	<form>	Specifies where to send the form-data when a form is submitted
    public const ACTION = 'action';
    #align	Not supported in HTML 5.	Specifies the alignment according to surrounding elements. Use CSS instead
    #Not supported
    #alt	<area>, <img>, <input>	Specifies an alternate text when the original element fails to display
    public const ALT = 'alt';
    #async	<script>	Specifies that the script is executed asynchronously (only for external scripts)
    public const ASYNC = 'async';
    #autocomplete	<form>, <input>	Specifies whether the <form> or the <input> element should have autocomplete enabled
    public const AUTOCOMPLETE = 'autocomplete';
    public const AUTOCOMPLETE_ON = 'on';
    public const AUTOCOMPLETE_OFF = 'off';
    #autofocus	<button>, <input>, <keygen>, <select>, <textarea>	Specifies that the element should automatically get focus when the page loads
    public const AUTOFOCUS = 'autofocus';
    #autoplay	<audio>, <video>	Specifies that the audio/video will start playing as soon as it is ready
    public const AUTOPLAY = 'autoplay';
    #bgcolor	Not supported in HTML 5.	Specifies the background color of an element. Use CSS instead
    #Not supported
    #border	Not supported in HTML 5.	Specifies the width of the border of an element. Use CSS instead
    #Not supported
    #challenge	<keygen>	Specifies that the value of the <keygen> element should be challenged when submitted
    public const CHALLENGE = 'challenge';
    #charset	<meta>, <script>	Specifies the character encoding
    public const CHARSET = 'charset';
    #checked	<input>	Specifies that an <input> element should be pre-selected when the page loads (for type="checkbox" or type="radio")
    public const CHECKED = 'checked';
    #cite	<blockquote>, <del>, <ins>, <q>	Specifies a URL which explains the quote/deleted/inserted text
    public const CITE = 'cite';
    #class	Global Attributes	Specifies one or more classnames for an element (refers to a class in a style sheet)
    public const CLASS = 'class';
    #color	Not supported in HTML 5.	Specifies the text color of an element. Use CSS instead
    #Not supported
    #cols	<textarea>	Specifies the visible width of a text area
    public const COLS = 'cols';
    #colspan	<td>, <th>	Specifies the number of columns a table cell should span
    public const COLSPAN = 'colspan';
    #content	<meta>	Gives the value associated with the http-equiv or name attribute
    public const CONTENT = 'content';
    #contenteditable	Global Attributes	Specifies whether the content of an element is editable or not
    public const CONTENTEDITABLE = 'contenteditable';
    public const CONTENTEDITABLE_TRUE = 'true';
    public const CONTENTEDITABLE_FALSE = 'false';
    #contextmenu	Global Attributes	Specifies a context menu for an element. The context menu appears when a user right-clicks on the element
    public const CONTEXTMENU = 'contextmenu';
    #controls	<audio>, <video>	Specifies that audio/video controls should be displayed (such as a play/pause button etc)
    public const CONTROLS = 'controls';
    #coords	<area>	Specifies the coordinates of the area
    public const COORDS = 'coords';

    public const CROSSORIGIN = 'crossorgin';
    public const CROSSORIGIN_ANONYMOUS = 'anonymous';
    public const CROSSORIGIN_USE_CREDENTIALS = 'use-credentials';
    #data	<object>	Specifies the URL of the resource to be used by the object
    public const DATA = 'data';
    #data-*	Global Attributes	Used to store custom data public to the page or application
    #use const DATA
    #datetime	<del>, <ins>, <time>	Specifies the date and time
    public const DATETIME = 'datetime';
    #default	<track>	Specifies that the track is to be enabled if the user's preferences do not indicate that another track would be more appropriate
    public const DEFAULT = 'default';
    #defer	<script>	Specifies that the script is executed when the page has finished parsing (only for external scripts)
    public const DEFER = 'defer';
    #dir	Global Attributes	Specifies the text direction for the content in an element
    public const DIR = 'dir';
    public const DIR_LTR = 'ltr';
    public const DIR_RTL = 'rtl';
    public const DIR_AUTO = 'auto';
    #dirname	<input>, <textarea>	Specifies that the text direction will be submitted
    public const DIRNAME = 'dirname';
    #disabled	<button>, <fieldset>, <input>, <keygen>, <optgroup>, <option>, <select>, <textarea>	Specifies that the specified element/group of elements should be disabled
    public const DISABLED = 'disabled';
    #download	<a>, <area>	Specifies that the target will be downloaded when a user clicks on the hyperlink
    public const DOWNLOAD = 'download';
    #draggable	Global Attributes	Specifies whether an element is draggable or not
    public const DRAGGABLE = 'draggable';
    public const DRAGGABLE_TRUE = 'true';
    public const DRAGGABLE_FALSE = 'false';
    public const DRAGGABLE_AUTO = 'auto';
    #dropzone	Global Attributes	Specifies whether the dragged data is copied, moved, or linked, when dropped
    public const DROPZONE = 'dropzone';
    #enctype	<form>	Specifies how the form-data should be encoded when submitting it to the server (only for method="post")
    public const ENCTYPE = 'enctype';
    public const ENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED = 'application/x-www-form-urlencoded';
    public const ENCTYPE_MULTIPART_FORM_DATA = 'multipart/form-data';
    public const ENCTYPE_TEXT_PLAIN = 'text/plain';
    #for	<label>, <output>	Specifies which form element(s) a label/calculation is bound to
    public const FOR = 'for';
    #form	<button>, <fieldset>, <input>, <keygen>, <label>, <meter>, <object>, <output>, <select>, <textarea>	Specifies the name of the form the element belongs to
    public const FORM = 'form';
    #formaction	<button>, <input>	Specifies where to send the form-data when a form is submitted. Only for type="submit"
    public const FORMACTION = 'formaction';
    public const FORMENCTYPE = 'formenctype';
    public const FORMENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED = 'application/x-www-form-urlencoded';
    public const FORMENCTYPE_MULTIPART_FORM_DATA = 'multipart/form-data';
    public const FORMENCTYPE_TEXT_PLAIN = 'text/plain';
    public const FORMMETHOD = 'formmethod';
    public const FORMMETHOD_GET = 'get';
    public const FORMMETHOD_POST = 'post';
    public const FORMNOVALIDATE = 'formnovalidate';
    public const FORMTARGET = 'formtarget';
    public const FORMTARGET_BLANK = '_blank';
    public const FORMTARGET_SELF = '_self';
    public const FORMTARGET_PARENT = '_parent';
    public const FORMTARGET_TOP = '_top';
    #headers	<td>, <th>	Specifies one or more headers cells a cell is related to
    public const HEADERS = 'headers';
    #height	<canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>	Specifies the height of the element
    public const HEIGHT = 'height';
    #hidden	Global Attributes	Specifies that an element is not yet, or is no longer, relevant
    public const HIDDEN = 'hidden';

    #high	<meter>	Specifies the range that is considered to be a high value
    public const HIGH = 'high';
    #href	<a>, <area>, <base>, <link>	Specifies the URL of the page the link goes to
    public const HREF = 'href';
    #hreflang	<a>, <area>, <link>	Specifies the language of the linked document
    public const HREFLANG = 'hreflang';
    #http-equiv	<meta>	Provides an HTTP header for the information/value of the content attribute
    public const HTTP_EQUIV = 'http-equiv';
    #id	Global Attributes	Specifies a unique id for an element
    public const ID = 'id';
    #ismap	<img>	Specifies an image as a server-side image-map
    public const ISMAP = 'ismap';
    #keytype	<keygen>	Specifies the security algorithm of the key
    public const KEYTYPE = 'keytype';
    #kind	<track>	Specifies the kind of text track
    public const KIND = 'kind';
    #label	<track>, <option>, <optgroup>	Specifies the title of the text track
    public const LABEL = 'label';
    #lang	Global Attributes	Specifies the language of the element's content
    public const LANG = 'lang';
    #list	<input>	Refers to a <datalist> element that contains pre-defined options for an <input> element
    public const LIST = 'list';

    public const LONGDESC = 'longdesc';
    #loop	<audio>, <video>	Specifies that the audio/video will start over again, every time it is finished
    public const LOOP = 'loop';
    #low	<meter>	Specifies the range that is considered to be a low value
    public const LOW = 'low';
    #max	<input>, <meter>, <progress>	Specifies the maximum value
    public const MAX = 'max';
    #maxlength	<input>, <textarea>	Specifies the maximum number of characters allowed in an element
    public const MAXLENGTH = 'maxlenght';
    #media	<a>, <area>, <link>, <source>, <style>	Specifies what media/device the linked document is optimized for
    public const MEDIA = 'media';
    #method	<form>	Specifies the HTTP method to use when sending form-data
    public const METHOD = 'method';
    public const METHOD_POST = 'post';
    public const METHOD_GET = 'get';
    #min	<input>, <meter>	Specifies a minimum value
    public const MIN = 'min';
    #multiple	<input>, <select>	Specifies that a user can enter more than one value
    public const MULTIPLE = 'multible';
    #muted	<video>, <audio>	Specifies that the audio output of the video should be muted
    public const MUTED = 'muted';
    #name	<button>, <fieldset>, <form>, <iframe>, <input>, <keygen>, <map>, <meta>, <object>, <output>, <param>, <select>, <textarea>	Specifies the name of the element
    public const NAME = 'name';

    public const META_NAME_APPLICATION = 'application-name';
    #novalidate	<form>	Specifies that the form should not be validated when submitted
    public const NOVALIDATE = 'novalidate';
    #onabort	<audio>, <embed>, <img>, <object>, <video>	Script to be run on abort
    public const ONABORT = 'onabort';
    #onafterprint	<body>	Script to be run after the document is printed
    public const ONAFTERPRINT = 'onafterprint';
    #onbeforeprint	<body>	Script to be run before the document is printed
    public const ONBEFOREPRINT = 'onbeforeprint';
    #onbeforeunload	<body>	Script to be run when the document is about to be unloaded
    public const ONBEFOREUNLOAD = 'onbeforeunload';
    #onblur	All visible elements.	Script to be run when the element loses focus
    public const ONBLUR = 'onblur';
    #oncanplay	<audio>, <embed>, <object>, <video>	Script to be run when a file is ready to start playing (when it has buffered enough to begin)
    public const ONCANPLAY = 'oncanplay';
    #oncanplaythrough	<audio>, <video>	Script to be run when a file can be played all the way to the end without pausing for buffering
    public const ONCANPLAYTHROUGH = 'oncanplaythrough';
    #onchange	All visible elements.	Script to be run when the value of the element is changed
    public const ONCHANGE = 'onchange';
    #onclick	All visible elements.	Script to be run when the element is being clicked
    public const ONCLICK = 'onclick';
    #oncontextmenu	All visible elements.	Script to be run when a context menu is triggered
    public const ONCONTEXTMENU = 'oncontextmenu';
    #oncopy	All visible elements.	Script to be run when the content of the element is being copied
    public const ONCOPY = 'oncopy';
    #oncuechange	<track>	Script to be run when the cue changes in a <track> element
    public const ONCUECHANGE = 'oncuechange';
    #oncut	All visible elements.	Script to be run when the content of the element is being cut
    public const ONCUT = 'oncut';
    #ondblclick	All visible elements.	Script to be run when the element is being double-clicked
    public const ONDBLCLICK = 'ondblclick';
    #ondrag	All visible elements.	Script to be run when the element is being dragged
    public const ONDRAG = 'ondrag';
    #ondragend	All visible elements.	Script to be run at the end of a drag operation
    public const ONDRAGEND = 'ondragend';
    #ondragenter	All visible elements.	Script to be run when an element has been dragged to a valid drop target
    public const ONDRAGENTER = 'ondragenter';
    #ondragleave	All visible elements.	Script to be run when an element leaves a valid drop target
    public const ONDRAGLEAVE = 'ondragleave';
    #ondragover	All visible elements.	Script to be run when an element is being dragged over a valid drop target
    public const ONDRAGOVER = 'ondragover';
    #ondragstart	All visible elements.	Script to be run at the start of a drag operation
    public const ONDRAGSTART = 'ondragstart';
    #ondrop	All visible elements.	Script to be run when dragged element is being dropped
    public const ONDROP = 'ondrop';
    #ondurationchange	<audio>, <video>	Script to be run when the length of the media changes
    public const ONDURATIONCHANGE = 'ondurationchange';
    #onemptied	<audio>, <video>	Script to be run when something bad happens and the file is suddenly unavailable (like unexpectedly disconnects)
    public const ONEMPTIED = 'onemptied';
    #onended	<audio>, <video>	Script to be run when the media has reach the end (a useful event for messages like "thanks for listening")
    public const ONENDED = 'onended';
    #onerror	<audio>, <body>, <embed>, <img>, <object>, <script>, <style>, <video>	Script to be run when an error occurs
    public const ONERROR = 'onerror';
    #onfocus	All visible elements.	Script to be run when the element gets focus
    public const ONFOCUS = 'onfocus';
    #onhashchange	<body>	Script to be run when there has been changes to the anchor part of the a URL
    public const ONHASHCHANGE = 'onhashchange';
    #oninput	All visible elements.	Script to be run when the element gets user input
    public const ONINPUT = 'oninput';
    #oninvalid	All visible elements.	Script to be run when the element is invalid
    public const ONINVALID = 'oninvalid';
    #onkeydown	All visible elements.	Script to be run when a user is pressing a key
    public const ONKEYDOWN = 'onkeydown';
    #onkeypress	All visible elements.	Script to be run when a user presses a key
    public const ONKEYPRESS = 'onkeypress';
    #onkeyup	All visible elements.	Script to be run when a user releases a key
    public const ONKEYUP = 'onkeyup';
    #onload	<body>, <iframe>, <img>, <input>, <link>, <script>, <style>	Script to be run when the element is finished loading
    public const ONLOAD = 'onload';
    #onloadeddata	<audio>, <video>	Script to be run when media data is loaded
    public const ONLOADEDDATA = 'onloadeddata';
    #onloadedmetadata	<audio>, <video>	Script to be run when meta data (like dimensions and duration) are loaded
    public const ONLOADEDMETADATA = 'onloadedmetadata';
    #onloadstart	<audio>, <video>	Script to be run just as the file begins to load before anything is actually loaded
    public const ONLOADSTART = 'onloadstart';
    #onmousedown	All visible elements.	Script to be run when a mouse button is pressed down on an element
    public const ONMOUSEDOWN = 'onmousedown';
    #onmousemove	All visible elements.	Script to be run as long as the  mouse pointer is moving over an element
    public const ONMOUSEMOVE = 'onmousemove';
    #onmouseout	All visible elements.	Script to be run when a mouse pointer moves out of an element
    public const ONMOUSEOUT = 'onmouseout';
    #onmouseover	All visible elements.	Script to be run when a mouse pointer moves over an element
    public const ONMOUSEOVER = 'onmouseover';
    #onmouseup	All visible elements.	Script to be run when a mouse button is released over an element
    public const ONMOUSEUP = 'onmouseup';
    #onmousewheel	All visible elements.	Script to be run when a mouse wheel is being scrolled over an element
    public const ONMOUSEWHEEL = 'onmousewheel';
    #onoffline	<body>	Script to be run when the browser starts to work offline
    public const ONOFFLINE = 'onoffline';
    #ononline	<body>	Script to be run when the browser starts to work online
    public const ONONLINE = 'ononline';
    #onpagehide	<body>	Script to be run when a user navigates away from a page
    public const ONPAGEHIDE = 'onpagehide';
    #onpageshow	<body>	Script to be run when a user navigates to a page
    public const ONPAGESHOW = 'onpageshow';
    #onpaste	All visible elements.	Script to be run when the user pastes some content in an element
    public const ONPASTE = 'onpaste';
    #onpause	<audio>, <video>	Script to be run when the media is paused either by the user or programmatically
    public const ONPAUSE = 'onpause';
    #onplay	<audio>, <video>	Script to be run when the media is ready to start playing
    public const ONPLAY = 'onplay';
    #onplaying	<audio>, <video>	Script to be run when the media actually has started playing.
    public const ONPLAYING = 'onplaying';
    #onpopstate	<body>	Script to be run when the window's history changes.
    public const ONPOPSTATE = 'onpopstate';
    #onprogress	<audio>, <video>	Script to be run when the browser is in the process of getting the media data
    public const ONPROGRESS = 'onprogress';
    #onratechange	<audio>, <video>	Script to be run each time the playback rate changes (like when a user switches to a slow motion or fast forward mode).
    public const ONRATECHANGE = 'onratechange';
    #onreset	<form>	Script to be run when a reset button in a form is clicked.
    public const ONRESET = 'onreset';
    #onresize	<body>	Script to be run when the browser window is being resized.
    public const ONRESIZE = 'onresize';
    #onscroll	All visible elements.	Script to be run when an element's scrollbar is being scrolled
    public const ONSCROLL = 'onscroll';
    #onsearch	<input>	Script to be run when the user writes something in a search field (for <input="search">)
    public const ONSEARCH = 'onsearch';
    #onseeked	<audio>, <video>	Script to be run when the seeking attribute is set to false indicating that seeking has ended
    public const ONSEEKED = 'onseeked';
    #onseeking	<audio>, <video>	Script to be run when the seeking attribute is set to true indicating that seeking is active
    public const ONSEEKING = 'onseeking';
    #onselect	All visible elements.	Script to be run when the element gets selected
    public const ONSELECT = 'onselect';
    #onshow	<menu>	Script to be run when a <menu> element is shown as a context menu
    public const ONSHOW = 'onshow';
    #onstalled	<audio>, <video>	Script to be run when the browser is unable to fetch the media data for whatever reason
    public const ONSTALLED = 'onstalled';
    #onstorage	<body>	Script to be run when a Web Storage area is updated
    public const ONSTORAGE = 'onstorage';
    #onsubmit	<form>	Script to be run when a form is submitted
    public const ONSUBMIT = 'onsubmit';
    #onsuspend	<audio>, <video>	Script to be run when fetching the media data is stopped before it is completely loaded for whatever reason
    public const ONSUSPEND = 'onsuspend';
    #ontimeupdate	<audio>, <video>	Script to be run when the playing position has changed (like when the user fast forwards to a different point in the media)
    public const ONTIMEUPDATE = 'ontimeupdate';
    #ontoggle	<details>	Script to be run when the user opens or closes the <details> element
    public const ONTOGGLE = 'ontoggle';
    #onunload	<body>	Script to be run when a page has unloaded (or the browser window has been closed)
    public const ONUNLOAD = 'onunload';
    #onvolumechange	<audio>, <video>	Script to be run each time the volume of a video/audio has been changed
    public const ONVOLUMECHANGE = 'onvolumechange';
    #onwaiting	<audio>, <video>	Script to be run when the media has paused but is expected to resume (like when the media pauses to buffer more data)
    public const ONWAITING = 'onwaiting';
    #onwheel	All visible elements.	Script to be run when the mouse wheel rolls up or down over an element
    public const ONWHEEL = 'onwheel';
    #open	<details>	Specifies that the details should be visible (open) to the user
    public const OPEN = 'open';
    #optimum	<meter>	Specifies what value is the optimal value for the gauge
    public const OPTIMUM = 'optimum';
    #pattern	<input>	Specifies a regular expression that an <input> element's value is checked against
    public const PATTERN = 'pattern';
    public const PING = 'ping';
    #placeholder	<input>, <textarea>	Specifies a short hint that describes the expected value of the element
    public const PLACEHOLDER = 'placeholder';
    #poster	<video>	Specifies an image to be shown while the video is downloading, or until the user hits the play button
    public const POSTER = 'poster';
    #preload	<audio>, <video>	Specifies if and how the author thinks the audio/video should be loaded when the page loads
    public const PRELOAD = 'preload';
    public const PRELOAD_AUTO = 'auto';
    public const PRELOAD_METADATA = 'metadata';
    public const PRELOAD_NONE = 'none';
    #readonly	<input>, <textarea>	Specifies that the element is read-only
    public const READONLY = 'readonly';

    public const REFERRERPOLICY = 'referrerpolicy';
    public const REFERRERPOLICY_NO_REFERRER = 'no-referrer';
    public const REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE = 'no-referrer-when-downgrade';
    public const REFERRERPOLICY_ORIGIN = 'origin';
    public const REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN = 'origin-when-cross-origin';
    public const REFERRERPOLICY_UNSAFE_URL = 'unsafe-url';

    #rel	<a>, <area>, <link>	Specifies the relationship between the current document and the linked document
    public const REL = 'rel';
    public const REL_ALTERNATE = 'alternate';
    public const REL_AUTHOR = 'author';
    public const REL_BOOKMARK = 'bookmark';
    public const REL_EXTERNAL = 'external';
    public const REL_HELP = 'help';
    public const REL_LICENSE = 'license';
    public const REL_NEXT = 'next';
    public const REL_NOFOLLOW = 'nofollow';
    public const REL_NOOPENER = 'noopener';
    public const REL_NOREFERRER = 'noreferrer';
    public const REL_OPENER = 'opener';
    public const REL_PREV = 'prev';
    public const REL_SEARCH = 'search';
    public const REL_TAG = 'tag';
    #required	<input>, <select>, <textarea>	Specifies that the element must be filled out before submitting the form
    public const REQUIRED = 'required';
    #reversed	<ol>	Specifies that the list order should be descending (9,8,7...)
    public const REVERSED = 'reversed';
    #rows	<textarea>	Specifies the visible number of lines in a text area
    public const ROWS = 'rows';
    #rowspan	<td>, <th>	Specifies the number of rows a table cell should span
    public const ROWSPAN = 'rowspan';
    #sandbox	<iframe>	Enables an extra set of restrictions for the content in an <iframe>
    public const SANDBOX = 'sandbox';
    #scope	<th>	Specifies whether a header cell is a header for a column, row, or group of columns or rows
    public const SCOPE = 'scope';
    #scoped	<style>	Specifies that the styles only apply to this element's parent element and that element's child elements
    public const SCOPED = 'scoped';
    #selected	<option>	Specifies that an option should be pre-selected when the page loads
    public const SELECTED = 'selected';
    #shape	<area>	Specifies the shape of the area
    public const SHAPE = 'shape';
    public const SHAPE_DEFAULT = 'default';
    public const SHAPE_RECT = 'rect';
    public const SHAPE_CIRCLE = 'circle';
    public const SHAPE_POLY = 'poly';
    #size	<input>, <select>	Specifies the width, in characters (for <input>) or specifies the number of visible options (for <select>)
    public const SIZE = 'size';
    #sizes	<img>, <link>, <source>	Specifies the size of the linked resource
    public const SIZES = 'sizes';
    #span	<col>, <colgroup>	Specifies the number of columns to span
    public const SPAN = 'span';
    #spellcheck	Global Attributes	Specifies whether the element is to have its spelling and grammar checked or not
    public const SPELLCHECK = 'spellcheck';
    public const SPELLCHECK_TRUE = 'true';
    public const SPELLCHECK_FALSE = 'false';
    #src	<audio>, <embed>, <iframe>, <img>, <input>, <script>, <source>, <track>, <video>	Specifies the URL of the media file
    public const SRC = 'src';
    #srcdoc	<iframe>	Specifies the HTML content of the page to show in the <iframe>
    public const SRCDOC = 'srcdoc';
    #srclang	<track>	Specifies the language of the track text data (required if kind="subtitles")
    public const SRCLANG = 'srclang';
    #srcset	<img>, <source>	Specifies the URL of the image to use in different situations
    public const SRCSET = 'srcset';
    #start	<ol>	Specifies the start value of an ordered list
    public const START = 'start';
    #step	<input>	Specifies the legal number intervals for an input field
    public const STEP = 'step';
    #style	Global Attributes	Specifies an inline CSS style for an element
    public const STYLE = 'style';
    #tabindex	Global Attributes	Specifies the tabbing order of an element
    public const TABINDEX = 'tabindex';

    #target	<a>, <area>, <base>, <form>	Specifies the target for where to open the linked document or where to submit the form
    public const TARGET = 'target';
    // target values
    public const TARGET_BLANK = '_blank';
    public const TARGET_PARENT = '_parent';
    public const TARGET_SELF = '_self';
    public const TARGET_TOP = '_top';

    #title	Global Attributes	Specifies extra information about an element
    public const TITLE = 'title';
    #translate	Global Attributes	Specifies whether the content of an element should be translated or not
    public const TRANSLATE = 'translate';

    #type	<button>, <embed>, <input>, <link>, <menu>, <object>, <script>, <source>, <style>	Specifies the type of element
    public const TYPE = 'type';   
    // type values
    public const TYPE_BUTTON = 'button';
    public const TYPE_RESET = 'reset';
    public const TYPE_CHECKBOX = 'checkbox';
    public const TYPE_COLOR = 'color';
    public const TYPE_DATE = 'date';
    public const TYPE_DATETIME_LOCAL = 'datetime-local';
    public const TYPE_EMAIL = 'email';
    public const TYPE_FILE = 'file';
    public const TYPE_HIDDEN = 'hidden';
    public const TYPE_IMAGE = 'image';
    public const TYPE_MONTH = 'month';
    public const TYPE_NUMBER = 'number';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_RADIO = 'radio';
    public const TYPE_RANGE = 'range';
    public const TYPE_SEARCH = 'search';
    public const TYPE_TEL = 'tel';
    public const TYPE_TEXT = 'text';
    public const TYPE_TIME = 'time';
    public const TYPE_URL = 'url';
    public const TYPE_WEEK = 'week';
    public const TYPE_TEXT_CSS = 'text/css';
    public const TYPE_LIST = 'list';
    public const TYPE_TOOLBAR = 'toolbar';
    public const TYPE_CONTEXT = 'context';
    public const TYPE_SUBMIT = 'submit';

    #usemap	<img>, <object>	Specifies an image as a client-side image-map
    public const USEMAP = 'usemap';
    #value	<button>, <input>, <li>, <option>, <meter>, <progress>, <param>	Specifies the value of the element
    public const VALUE = 'value';
    #width	<canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>	Specifies the width of the element
    public const WIDTH = 'width';
    #wrap	<textarea>	Specifies how the text in a text area is to be wrapped when submitted in a form
    public const WRAP = 'wrap';
}