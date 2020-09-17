<?php
namespace tekki\core\page\html;
class HTMLAttr{
    #accept	<input>	Specifies the types of files that the server accepts (only for type="file")
    protected const ACCEPT = 'accept';
    #accept-charset	<form>	Specifies the character encodings that are to be used for the form submission
    protected const ACCEPT_CHARSET = 'accept-charset';
    #accesskey	Global Attributes	Specifies a shortcut key to activate/focus an element
    public const ACCESSKEY = 'accesskey';
    #action	<form>	Specifies where to send the form-data when a form is submitted
    protected const ACTION = 'action';
    #align	Not supported in HTML 5.	Specifies the alignment according to surrounding elements. Use CSS instead
    #Not supported
    #alt	<area>, <img>, <input>	Specifies an alternate text when the original element fails to display
    protected const ALT = 'alt';
    #async	<script>	Specifies that the script is executed asynchronously (only for external scripts)
    protected const ASYNC = 'async';
    #autocomplete	<form>, <input>	Specifies whether the <form> or the <input> element should have autocomplete enabled
    protected const AUTOCOMPLETE = 'autocomplete';
    protected const AUTOCOMPLETE_ON = 'on';
    protected const AUTOCOMPLETE_OFF = 'off';
    #autofocus	<button>, <input>, <keygen>, <select>, <textarea>	Specifies that the element should automatically get focus when the page loads
    protected const AUTOFOCUS = 'autofocus';
    #autoplay	<audio>, <video>	Specifies that the audio/video will start playing as soon as it is ready
    protected const AUTOPLAY = 'autoplay';
    #bgcolor	Not supported in HTML 5.	Specifies the background color of an element. Use CSS instead
    #Not supported
    #border	Not supported in HTML 5.	Specifies the width of the border of an element. Use CSS instead
    #Not supported
    #challenge	<keygen>	Specifies that the value of the <keygen> element should be challenged when submitted
    protected const CHALLENGE = 'challenge';
    #charset	<meta>, <script>	Specifies the character encoding
    protected const CHARSET = 'charset';
    #checked	<input>	Specifies that an <input> element should be pre-selected when the page loads (for type="checkbox" or type="radio")
    protected const CHECKED = 'checked';
    #cite	<blockquote>, <del>, <ins>, <q>	Specifies a URL which explains the quote/deleted/inserted text
    protected const CITE = 'cite';
    #class	Global Attributes	Specifies one or more classnames for an element (refers to a class in a style sheet)
    public const _CLASS = 'class';
    #color	Not supported in HTML 5.	Specifies the text color of an element. Use CSS instead
    #Not supported
    #cols	<textarea>	Specifies the visible width of a text area
    protected const COLS = 'cols';
    #colspan	<td>, <th>	Specifies the number of columns a table cell should span
    protected const COLSPAN = 'colspan';
    #content	<meta>	Gives the value associated with the http-equiv or name attribute
    protected const CONTENT = 'content';
    #contenteditable	Global Attributes	Specifies whether the content of an element is editable or not
    public const CONTENTEDITABLE = 'contenteditable';
    public const CONTENTEDITABLE_TRUE = 'true';
    public const CONTENTEDITABLE_FALSE = 'false';
    #contextmenu	Global Attributes	Specifies a context menu for an element. The context menu appears when a user right-clicks on the element
    protected const CONTEXTMENU = 'contextmenu';
    #controls	<audio>, <video>	Specifies that audio/video controls should be displayed (such as a play/pause button etc)
    protected const CONTROLS = 'controls';
    #coords	<area>	Specifies the coordinates of the area
    protected const COORDS = 'coords';
    #data	<object>	Specifies the URL of the resource to be used by the object
    protected const DATA = 'data';
    #data-*	Global Attributes	Used to store custom data protected to the page or application
    #use const DATA
    #datetime	<del>, <ins>, <time>	Specifies the date and time
    protected const DATETIME = 'datetime';
    #default	<track>	Specifies that the track is to be enabled if the user's preferences do not indicate that another track would be more appropriate
    protected const DEFAULT = 'default';
    #defer	<script>	Specifies that the script is executed when the page has finished parsing (only for external scripts)
    protected const DEFER = 'defer';
    #dir	Global Attributes	Specifies the text direction for the content in an element
    public const DIR = 'dir';
    public const DIR_LTR = 'ltr';
    public const DIR_RTL = 'rtl';
    public const DIR_AUTO = 'auto';
    #dirname	<input>, <textarea>	Specifies that the text direction will be submitted
    protected const DIRNAME = 'dirname';
    #disabled	<button>, <fieldset>, <input>, <keygen>, <optgroup>, <option>, <select>, <textarea>	Specifies that the specified element/group of elements should be disabled
    protected const DISABLED = 'disabled';
    #download	<a>, <area>	Specifies that the target will be downloaded when a user clicks on the hyperlink
    protected const DOWNLOAD = 'download';
    #draggable	Global Attributes	Specifies whether an element is draggable or not
    public const DRAGGABLE = 'draggable';
    public const DRAGGABLE_TRUE = 'true';
    public const DRAGGABLE_FALSE = 'false';
    public const DRAGGABLE_AUTO = 'auto';
    #dropzone	Global Attributes	Specifies whether the dragged data is copied, moved, or linked, when dropped
    protected const DROPZONE = 'dropzone';
    #enctype	<form>	Specifies how the form-data should be encoded when submitting it to the server (only for method="post")
    protected const ENCTYPE = 'enctype';
    protected const ENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED = 'application/x-www-form-urlencoded';
    protected const ENCTYPE_MULTIPART_FORM_DATA = 'multipart/form-data';
    protected const ENCTYPE_TEXT_PLAIN = 'text/plain';
    #for	<label>, <output>	Specifies which form element(s) a label/calculation is bound to
    protected const FOR = 'for';
    #form	<button>, <fieldset>, <input>, <keygen>, <label>, <meter>, <object>, <output>, <select>, <textarea>	Specifies the name of the form the element belongs to
    protected const FORM = 'form';
    #formaction	<button>, <input>	Specifies where to send the form-data when a form is submitted. Only for type="submit"
    protected const FORMACTION = 'formaction';
    protected const FORMENCTYPE = 'formenctype';
    protected const FORMENCTYPE_APPLICATION_X_WWW_FORM_URLENCODED = 'application/x-www-form-urlencoded';
    protected const FORMENCTYPE_MULTIPART_FORM_DATA = 'multipart/form-data';
    protected const FORMENCTYPE_TEXT_PLAIN = 'text/plain';
    protected const FORMMETHOD = 'formmethod';
    protected const FORMMETHOD_GET = 'get';
    protected const FORMMETHOD_POST = 'post';
    protected const FORMNOVALIDATE = 'formnovalidate';
    protected const FORMTARGET = 'formtarget';
    protected const FORMTARGET_BLANK = '_blank';
    protected const FORMTARGET_SELF = '_self';
    protected const FORMTARGET_PARENT = '_parent';
    protected const FORMTARGET_TOP = '_top';
    #headers	<td>, <th>	Specifies one or more headers cells a cell is related to
    protected const HEADERS = 'headers';
    #height	<canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>	Specifies the height of the element
    protected const HEIGHT = 'height';
    #hidden	Global Attributes	Specifies that an element is not yet, or is no longer, relevant
    public const HIDDEN = 'hidden';

    #high	<meter>	Specifies the range that is considered to be a high value
    protected const HIGH = 'high';
    #href	<a>, <area>, <base>, <link>	Specifies the URL of the page the link goes to
    protected const HREF = 'href';
    #hreflang	<a>, <area>, <link>	Specifies the language of the linked document
    protected const HREFLANG = 'hreflang';
    #http-equiv	<meta>	Provides an HTTP header for the information/value of the content attribute
    protected const HTTP_EQUIV = 'http-equiv';
    #id	Global Attributes	Specifies a unique id for an element
    public const ID = 'id';
    #ismap	<img>	Specifies an image as a server-side image-map
    protected const ISMAP = 'ismap';
    #keytype	<keygen>	Specifies the security algorithm of the key
    protected const KEYTYPE = 'keytype';
    #kind	<track>	Specifies the kind of text track
    protected const KIND = 'kind';
    #label	<track>, <option>, <optgroup>	Specifies the title of the text track
    protected const LABEL = 'label';
    #lang	Global Attributes	Specifies the language of the element's content
    public const LANG = 'lang';
    #list	<input>	Refers to a <datalist> element that contains pre-defined options for an <input> element
    protected const LIST = 'list';
    #loop	<audio>, <video>	Specifies that the audio/video will start over again, every time it is finished
    protected const LOOP = 'loop';
    #low	<meter>	Specifies the range that is considered to be a low value
    protected const LOW = 'low';
    #max	<input>, <meter>, <progress>	Specifies the maximum value
    protected const MAX = 'max';
    #maxlength	<input>, <textarea>	Specifies the maximum number of characters allowed in an element
    protected const MAXLENGTH = 'maxlenght';
    #media	<a>, <area>, <link>, <source>, <style>	Specifies what media/device the linked document is optimized for
    protected const MEDIA = 'media';
    #method	<form>	Specifies the HTTP method to use when sending form-data
    protected const METHOD = 'method';
    protected const METHOD_POST = 'post';
    protected const METHOD_GET = 'get';
    #min	<input>, <meter>	Specifies a minimum value
    protected const MIN = 'min';
    #multiple	<input>, <select>	Specifies that a user can enter more than one value
    protected const MULTIPLE = 'multible';
    #muted	<video>, <audio>	Specifies that the audio output of the video should be muted
    protected const MUTED = 'muted';
    #name	<button>, <fieldset>, <form>, <iframe>, <input>, <keygen>, <map>, <meta>, <object>, <output>, <param>, <select>, <textarea>	Specifies the name of the element
    protected const NAME = 'name';

    protected const META_NAME_APPLICATION = 'application-name';
    #novalidate	<form>	Specifies that the form should not be validated when submitted
    protected const NOVALIDATE = 'novalidate';
    #onabort	<audio>, <embed>, <img>, <object>, <video>	Script to be run on abort
    protected const ONABORT = 'onabort';
    #onafterprint	<body>	Script to be run after the document is printed
    protected const ONAFTERPRINT = 'onafterprint';
    #onbeforeprint	<body>	Script to be run before the document is printed
    protected const ONBEFOREPRINT = 'onbeforeprint';
    #onbeforeunload	<body>	Script to be run when the document is about to be unloaded
    protected const ONBEFOREUNLOAD = 'onbeforeunload';
    #onblur	All visible elements.	Script to be run when the element loses focus
    protected const ONBLUR = 'onblur';
    #oncanplay	<audio>, <embed>, <object>, <video>	Script to be run when a file is ready to start playing (when it has buffered enough to begin)
    protected const ONCANPLAY = 'oncanplay';
    #oncanplaythrough	<audio>, <video>	Script to be run when a file can be played all the way to the end without pausing for buffering
    protected const ONCANPLAYTHROUGH = 'oncanplaythrough';
    #onchange	All visible elements.	Script to be run when the value of the element is changed
    protected const ONCHANGE = 'onchange';
    #onclick	All visible elements.	Script to be run when the element is being clicked
    protected const ONCLICK = 'onclick';
    #oncontextmenu	All visible elements.	Script to be run when a context menu is triggered
    protected const ONCONTEXTMENU = 'oncontextmenu';
    #oncopy	All visible elements.	Script to be run when the content of the element is being copied
    protected const ONCOPY = 'oncopy';
    #oncuechange	<track>	Script to be run when the cue changes in a <track> element
    protected const ONCUECHANGE = 'oncuechange';
    #oncut	All visible elements.	Script to be run when the content of the element is being cut
    protected const ONCUT = 'oncut';
    #ondblclick	All visible elements.	Script to be run when the element is being double-clicked
    protected const ONDBLCLICK = 'ondblclick';
    #ondrag	All visible elements.	Script to be run when the element is being dragged
    protected const ONDRAG = 'ondrag';
    #ondragend	All visible elements.	Script to be run at the end of a drag operation
    protected const ONDRAGEND = 'ondragend';
    #ondragenter	All visible elements.	Script to be run when an element has been dragged to a valid drop target
    protected const ONDRAGENTER = 'ondragenter';
    #ondragleave	All visible elements.	Script to be run when an element leaves a valid drop target
    protected const ONDRAGLEAVE = 'ondragleave';
    #ondragover	All visible elements.	Script to be run when an element is being dragged over a valid drop target
    protected const ONDRAGOVER = 'ondragover';
    #ondragstart	All visible elements.	Script to be run at the start of a drag operation
    protected const ONDRAGSTART = 'ondragstart';
    #ondrop	All visible elements.	Script to be run when dragged element is being dropped
    protected const ONDROP = 'ondrop';
    #ondurationchange	<audio>, <video>	Script to be run when the length of the media changes
    protected const ONDURATIONCHANGE = 'ondurationchange';
    #onemptied	<audio>, <video>	Script to be run when something bad happens and the file is suddenly unavailable (like unexpectedly disconnects)
    protected const ONEMPTIED = 'onemptied';
    #onended	<audio>, <video>	Script to be run when the media has reach the end (a useful event for messages like "thanks for listening")
    protected const ONENDED = 'onended';
    #onerror	<audio>, <body>, <embed>, <img>, <object>, <script>, <style>, <video>	Script to be run when an error occurs
    protected const ONERROR = 'onerror';
    #onfocus	All visible elements.	Script to be run when the element gets focus
    protected const ONFOCUS = 'onfocus';
    #onhashchange	<body>	Script to be run when there has been changes to the anchor part of the a URL
    protected const ONHASHCHANGE = 'onhashchange';
    #oninput	All visible elements.	Script to be run when the element gets user input
    protected const ONINPUT = 'oninput';
    #oninvalid	All visible elements.	Script to be run when the element is invalid
    protected const ONINVALID = 'oninvalid';
    #onkeydown	All visible elements.	Script to be run when a user is pressing a key
    protected const ONKEYDOWN = 'onkeydown';
    #onkeypress	All visible elements.	Script to be run when a user presses a key
    protected const ONKEYPRESS = 'onkeypress';
    #onkeyup	All visible elements.	Script to be run when a user releases a key
    protected const ONKEYUP = 'onkeyup';
    #onload	<body>, <iframe>, <img>, <input>, <link>, <script>, <style>	Script to be run when the element is finished loading
    protected const ONLOAD = 'onload';
    #onloadeddata	<audio>, <video>	Script to be run when media data is loaded
    protected const ONLOADEDDATA = 'onloadeddata';
    #onloadedmetadata	<audio>, <video>	Script to be run when meta data (like dimensions and duration) are loaded
    protected const ONLOADEDMETADATA = 'onloadedmetadata';
    #onloadstart	<audio>, <video>	Script to be run just as the file begins to load before anything is actually loaded
    protected const ONLOADSTART = 'onloadstart';
    #onmousedown	All visible elements.	Script to be run when a mouse button is pressed down on an element
    protected const ONMOUSEDOWN = 'onmousedown';
    #onmousemove	All visible elements.	Script to be run as long as the  mouse pointer is moving over an element
    protected const ONMOUSEMOVE = 'onmousemove';
    #onmouseout	All visible elements.	Script to be run when a mouse pointer moves out of an element
    protected const ONMOUSEOUT = 'onmouseout';
    #onmouseover	All visible elements.	Script to be run when a mouse pointer moves over an element
    protected const ONMOUSEOVER = 'onmouseover';
    #onmouseup	All visible elements.	Script to be run when a mouse button is released over an element
    protected const ONMOUSEUP = 'onmouseup';
    #onmousewheel	All visible elements.	Script to be run when a mouse wheel is being scrolled over an element
    protected const ONMOUSEWHEEL = 'onmousewheel';
    #onoffline	<body>	Script to be run when the browser starts to work offline
    protected const ONOFFLINE = 'onoffline';
    #ononline	<body>	Script to be run when the browser starts to work online
    protected const ONONLINE = 'ononline';
    #onpagehide	<body>	Script to be run when a user navigates away from a page
    protected const ONPAGEHIDE = 'onpagehide';
    #onpageshow	<body>	Script to be run when a user navigates to a page
    protected const ONPAGESHOW = 'onpageshow';
    #onpaste	All visible elements.	Script to be run when the user pastes some content in an element
    protected const ONPASTE = 'onpaste';
    #onpause	<audio>, <video>	Script to be run when the media is paused either by the user or programmatically
    protected const ONPAUSE = 'onpause';
    #onplay	<audio>, <video>	Script to be run when the media is ready to start playing
    protected const ONPLAY = 'onplay';
    #onplaying	<audio>, <video>	Script to be run when the media actually has started playing.
    protected const ONPLAYING = 'onplaying';
    #onpopstate	<body>	Script to be run when the window's history changes.
    protected const ONPOPSTATE = 'onpopstate';
    #onprogress	<audio>, <video>	Script to be run when the browser is in the process of getting the media data
    protected const ONPROGRESS = 'onprogress';
    #onratechange	<audio>, <video>	Script to be run each time the playback rate changes (like when a user switches to a slow motion or fast forward mode).
    protected const ONRATECHANGE = 'onratechange';
    #onreset	<form>	Script to be run when a reset button in a form is clicked.
    protected const ONRESET = 'onreset';
    #onresize	<body>	Script to be run when the browser window is being resized.
    protected const ONRESIZE = 'onresize';
    #onscroll	All visible elements.	Script to be run when an element's scrollbar is being scrolled
    protected const ONSCROLL = 'onscroll';
    #onsearch	<input>	Script to be run when the user writes something in a search field (for <input="search">)
    protected const ONSEARCH = 'onsearch';
    #onseeked	<audio>, <video>	Script to be run when the seeking attribute is set to false indicating that seeking has ended
    protected const ONSEEKED = 'onseeked';
    #onseeking	<audio>, <video>	Script to be run when the seeking attribute is set to true indicating that seeking is active
    protected const ONSEEKING = 'onseeking';
    #onselect	All visible elements.	Script to be run when the element gets selected
    protected const ONSELECT = 'onselect';
    #onshow	<menu>	Script to be run when a <menu> element is shown as a context menu
    protected const ONSHOW = 'onshow';
    #onstalled	<audio>, <video>	Script to be run when the browser is unable to fetch the media data for whatever reason
    protected const ONSTALLED = 'onstalled';
    #onstorage	<body>	Script to be run when a Web Storage area is updated
    protected const ONSTORAGE = 'onstorage';
    #onsubmit	<form>	Script to be run when a form is submitted
    protected const ONSUBMIT = 'onsubmit';
    #onsuspend	<audio>, <video>	Script to be run when fetching the media data is stopped before it is completely loaded for whatever reason
    protected const ONSUSPEND = 'onsuspend';
    #ontimeupdate	<audio>, <video>	Script to be run when the playing position has changed (like when the user fast forwards to a different point in the media)
    protected const ONTIMEUPDATE = 'ontimeupdate';
    #ontoggle	<details>	Script to be run when the user opens or closes the <details> element
    protected const ONTOGGLE = 'ontoggle';
    #onunload	<body>	Script to be run when a page has unloaded (or the browser window has been closed)
    protected const ONUNLOAD = 'onunload';
    #onvolumechange	<audio>, <video>	Script to be run each time the volume of a video/audio has been changed
    protected const ONVOLUMECHANGE = 'onvolumechange';
    #onwaiting	<audio>, <video>	Script to be run when the media has paused but is expected to resume (like when the media pauses to buffer more data)
    protected const ONWAITING = 'onwaiting';
    #onwheel	All visible elements.	Script to be run when the mouse wheel rolls up or down over an element
    protected const ONWHEEL = 'onwheel';
    #open	<details>	Specifies that the details should be visible (open) to the user
    protected const OPEN = 'open';
    #optimum	<meter>	Specifies what value is the optimal value for the gauge
    protected const OPTIMUM = 'optimum';
    #pattern	<input>	Specifies a regular expression that an <input> element's value is checked against
    protected const PATTERN = 'pattern';
    protected const PING = 'ping';
    #placeholder	<input>, <textarea>	Specifies a short hint that describes the expected value of the element
    protected const PLACEHOLDER = 'placeholder';
    #poster	<video>	Specifies an image to be shown while the video is downloading, or until the user hits the play button
    protected const POSTER = 'poster';
    #preload	<audio>, <video>	Specifies if and how the author thinks the audio/video should be loaded when the page loads
    protected const PRELOAD = 'preload';
    protected const PRELOAD_AUTO = 'auto';
    protected const PRELOAD_METADATA = 'metadata';
    protected const PRELOAD_NONE = 'none';
    #readonly	<input>, <textarea>	Specifies that the element is read-only
    protected const READONLY = 'readonly';

    protected const REFERRERPOLICY = 'referrerpolicy';
    protected const REFERRERPOLICY_NO_REFERRER = 'no-referrer';
    protected const REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE = 'no-referrer-when-downgrade';
    protected const REFERRERPOLICY_ORIGIN = 'origin';
    protected const REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN = 'origin-when-cross-origin';
    protected const REFERRERPOLICY_UNSAFE_URL = 'unsafe-url';

    #rel	<a>, <area>, <link>	Specifies the relationship between the current document and the linked document
    protected const REL = 'rel';
    protected const REL_ALTERNATE = 'alternate';
    protected const REL_AUTHOR = 'author';
    protected const REL_BOOKMARK = 'bookmark';
    protected const REL_EXTERNAL = 'external';
    protected const REL_HELP = 'help';
    protected const REL_LICENSE = 'license';
    protected const REL_NEXT = 'next';
    protected const REL_NOFOLLOW = 'nofollow';
    protected const REL_NOOPENER = 'noopener';
    protected const REL_NOREFERRER = 'noreferrer';
    protected const REL_OPENER = 'opener';
    protected const REL_PREV = 'prev';
    protected const REL_SEARCH = 'search';
    protected const REL_TAG = 'tag';
    #required	<input>, <select>, <textarea>	Specifies that the element must be filled out before submitting the form
    protected const REQUIRED = 'required';
    #reversed	<ol>	Specifies that the list order should be descending (9,8,7...)
    protected const REVERSED = 'reversed';
    #rows	<textarea>	Specifies the visible number of lines in a text area
    protected const ROWS = 'rows';
    #rowspan	<td>, <th>	Specifies the number of rows a table cell should span
    protected const ROWSPAN = 'rowspan';
    #sandbox	<iframe>	Enables an extra set of restrictions for the content in an <iframe>
    protected const SANDBOX = 'sandbox';
    #scope	<th>	Specifies whether a header cell is a header for a column, row, or group of columns or rows
    protected const SCOPE = 'scope';
    #scoped	<style>	Specifies that the styles only apply to this element's parent element and that element's child elements
    protected const SCOPED = 'scoped';
    #selected	<option>	Specifies that an option should be pre-selected when the page loads
    protected const SELECTED = 'selected';
    #shape	<area>	Specifies the shape of the area
    protected const SHAPE = 'shape';
    protected const SHAPE_DEFAULT = 'default';
    protected const SHAPE_RECT = 'rect';
    protected const SHAPE_CIRCLE = 'circle';
    protected const SHAPE_POLY = 'poly';
    #size	<input>, <select>	Specifies the width, in characters (for <input>) or specifies the number of visible options (for <select>)
    protected const SIZE = 'size';
    #sizes	<img>, <link>, <source>	Specifies the size of the linked resource
    protected const SIZES = 'sizes';
    #span	<col>, <colgroup>	Specifies the number of columns to span
    protected const SPAN = 'span';
    #spellcheck	Global Attributes	Specifies whether the element is to have its spelling and grammar checked or not
    public const SPELLCHECK = 'spellcheck';
    public const SPELLCHECK_TRUE = 'true';
    public const SPELLCHECK_FALSE = 'false';
    #src	<audio>, <embed>, <iframe>, <img>, <input>, <script>, <source>, <track>, <video>	Specifies the URL of the media file
    protected const SRC = 'src';
    #srcdoc	<iframe>	Specifies the HTML content of the page to show in the <iframe>
    protected const SRCDOC = 'srcdoc';
    #srclang	<track>	Specifies the language of the track text data (required if kind="subtitles")
    protected const SRCLANG = 'srclang';
    #srcset	<img>, <source>	Specifies the URL of the image to use in different situations
    protected const SRCSET = 'srcset';
    #start	<ol>	Specifies the start value of an ordered list
    protected const START = 'start';
    #step	<input>	Specifies the legal number intervals for an input field
    protected const STEP = 'step';
    #style	Global Attributes	Specifies an inline CSS style for an element
    public const STYLE = 'style';
    #tabindex	Global Attributes	Specifies the tabbing order of an element
    public const TABINDEX = 'tabindex';

    #target	<a>, <area>, <base>, <form>	Specifies the target for where to open the linked document or where to submit the form
    protected const TARGET = 'target';
    // target values
    protected const TARGET_BLANK = '_blank';
    protected const TARGET_PARENT = '_parent';
    protected const TARGET_SELF = '_self';
    protected const TARGET_TOP = '_top';

    #title	Global Attributes	Specifies extra information about an element
    public const TITLE = 'title';
    #translate	Global Attributes	Specifies whether the content of an element should be translated or not
    public const TRANSLATE = 'translate';

    #type	<button>, <embed>, <input>, <link>, <menu>, <object>, <script>, <source>, <style>	Specifies the type of element
    protected const TYPE = 'type';   
    // type values
    protected const TYPE_BUTTON = 'button';
    protected const TYPE_RESET = 'reset';
    protected const TYPE_CHECKBOX = 'checkbox';
    protected const TYPE_COLOR = 'color';
    protected const TYPE_DATE = 'date';
    protected const TYPE_DATETIME_LOCAL = 'datetime-local';
    protected const TYPE_EMAIL = 'email';
    protected const TYPE_FILE = 'file';
    protected const TYPE_HIDDEN = 'hidden';
    protected const TYPE_IMAGE = 'image';
    protected const TYPE_MONTH = 'month';
    protected const TYPE_NUMBER = 'number';
    protected const TYPE_PASSWORD = 'password';
    protected const TYPE_RADIO = 'radio';
    protected const TYPE_RANGE = 'range';
    protected const TYPE_SEARCH = 'search';
    protected const TYPE_TEL = 'tel';
    protected const TYPE_TEXT = 'text';
    protected const TYPE_TIME = 'time';
    protected const TYPE_URL = 'url';
    protected const TYPE_WEEK = 'week';
    protected const TYPE_TEXT_CSS = 'text/css';
    protected const TYPE_LIST = 'list';
    protected const TYPE_TOOLBAR = 'toolbar';
    protected const TYPE_CONTEXT = 'context';
    protected const TYPE_SUBMIT = 'submit';

    #usemap	<img>, <object>	Specifies an image as a client-side image-map
    protected const USEMAP = 'usemap';
    #value	<button>, <input>, <li>, <option>, <meter>, <progress>, <param>	Specifies the value of the element
    protected const VALUE = 'value';
    #width	<canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>	Specifies the width of the element
    protected const WIDTH = 'width';
    #wrap	<textarea>	Specifies how the text in a text area is to be wrapped when submitted in a form
    protected const WRAP = 'wrap';
}