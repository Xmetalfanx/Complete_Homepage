<!DOCTYPE html>
<html>
<head>
<title>My "DYI NAS" idea</title>
<meta charset="utf-8">
<style>
.markdown-katex-preview {
  overflow: hidden;
  font-family: "Helvetica Neue", Helvetica, "Segoe UI", Arial, freesans, sans-serif;
  font-size: 16px;
  line-height: 1.6;
  word-wrap: break-word;
  color: #555;
  background-color: #fcfcf8;
  margin: 10px 13px 10px 13px;
  padding: 25px;
}
.markdown-katex-preview > *:first-child {
  margin-top: 0 !important;
}
.markdown-katex-preview > *:last-child {
  margin-bottom: 0 !important;
}
.markdown-katex-preview a:not([href]) {
  color: inherit;
  text-decoration: none;
}
.markdown-katex-preview a {
  color: #08c;
  text-decoration: none;
}
.markdown-katex-preview a:hover {
  color: #0050a3;
  text-decoration: none;
}
.markdown-katex-preview a img {
  border: none;
}
.markdown-katex-preview .absent {
  color: #c00;
}
.markdown-katex-preview .anchor {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  padding-right: 6px;
  padding-left: 30px;
  margin-left: -30px;
}
.markdown-katex-preview .anchor:focus {
  outline: none;
}
.markdown-katex-preview h1,
.markdown-katex-preview h2,
.markdown-katex-preview h3,
.markdown-katex-preview h4,
.markdown-katex-preview h5,
.markdown-katex-preview h6 {
  position: relative;
  margin-top: 1em;
  margin-bottom: 16px;
  font-weight: bold;
  line-height: 1.4;
}
.markdown-katex-preview h1 .octicon-link,
.markdown-katex-preview h2 .octicon-link,
.markdown-katex-preview h3 .octicon-link,
.markdown-katex-preview h4 .octicon-link,
.markdown-katex-preview h5 .octicon-link,
.markdown-katex-preview h6 .octicon-link {
  display: none;
  color: #000;
  vertical-align: middle;
}
.markdown-katex-preview h1:hover .anchor,
.markdown-katex-preview h2:hover .anchor,
.markdown-katex-preview h3:hover .anchor,
.markdown-katex-preview h4:hover .anchor,
.markdown-katex-preview h5:hover .anchor,
.markdown-katex-preview h6:hover .anchor {
  padding-left: 8px;
  margin-left: -30px;
  text-decoration: none;
}
.markdown-katex-preview h1:hover .anchor .octicon-link,
.markdown-katex-preview h2:hover .anchor .octicon-link,
.markdown-katex-preview h3:hover .anchor .octicon-link,
.markdown-katex-preview h4:hover .anchor .octicon-link,
.markdown-katex-preview h5:hover .anchor .octicon-link,
.markdown-katex-preview h6:hover .anchor .octicon-link {
  display: inline-block;
}
.markdown-katex-preview h1 tt,
.markdown-katex-preview h2 tt,
.markdown-katex-preview h3 tt,
.markdown-katex-preview h4 tt,
.markdown-katex-preview h5 tt,
.markdown-katex-preview h6 tt,
.markdown-katex-preview h1 code,
.markdown-katex-preview h2 code,
.markdown-katex-preview h3 code,
.markdown-katex-preview h4 code,
.markdown-katex-preview h5 code,
.markdown-katex-preview h6 code {
  font-size: inherit;
}
.markdown-katex-preview h1 {
  padding-bottom: 0.3em;
  font-size: 2.25em;
  line-height: 1.2;
  border-bottom: 1px solid #eee;
}
.markdown-katex-preview h1 .anchor {
  line-height: 1;
}
.markdown-katex-preview h2 {
  padding-bottom: 0.3em;
  font-size: 1.75em;
  line-height: 1.225;
  border-bottom: 1px solid #eee;
}
.markdown-katex-preview h2 .anchor {
  line-height: 1;
}
.markdown-katex-preview h3 {
  font-size: 1.5em;
  line-height: 1.43;
}
.markdown-katex-preview h3 .anchor {
  line-height: 1.2;
}
.markdown-katex-preview h4 {
  font-size: 1.25em;
}
.markdown-katex-preview h4 .anchor {
  line-height: 1.2;
}
.markdown-katex-preview h5 {
  font-size: 1em;
}
.markdown-katex-preview h5 .anchor {
  line-height: 1.1;
}
.markdown-katex-preview h6 {
  font-size: 1em;
  color: #777;
}
.markdown-katex-preview h6 .anchor {
  line-height: 1.1;
}
.markdown-katex-preview p,
.markdown-katex-preview blockquote,
.markdown-katex-preview ul,
.markdown-katex-preview ol,
.markdown-katex-preview dl,
.markdown-katex-preview table,
.markdown-katex-preview pre {
  margin-top: 0;
  margin-bottom: 16px;
}
.markdown-katex-preview hr {
  height: 4px;
  padding: 0;
  margin: 16px 0;
  background-color: #e7e7e7;
  border: 0 none;
}
.markdown-katex-preview ul,
.markdown-katex-preview ol {
  padding-left: 2em;
}
.markdown-katex-preview ul.no-list,
.markdown-katex-preview ol.no-list {
  padding: 0;
  list-style-type: none;
}
.markdown-katex-preview ul ul,
.markdown-katex-preview ul ol,
.markdown-katex-preview ol ol,
.markdown-katex-preview ol ul {
  margin-top: 0;
  margin-bottom: 0;
}
.markdown-katex-preview li {
  margin-bottom: 0;
}
.markdown-katex-preview li > p {
  margin-top: 0;
  margin-bottom: 0;
}
.markdown-katex-preview dl {
  padding: 0;
}
.markdown-katex-preview dl dt {
  padding: 0;
  margin-top: 16px;
  font-size: 1em;
  font-style: italic;
  font-weight: bold;
}
.markdown-katex-preview dl dd {
  padding: 0 16px;
  margin-bottom: 16px;
}
.markdown-katex-preview blockquote {
  padding: 0 15px;
  color: #777;
  border-left: 4px solid #ddd;
  margin-left: 0;
}
.markdown-katex-preview blockquote > :first-child {
  margin-top: 0;
}
.markdown-katex-preview blockquote > :last-child {
  margin-bottom: 0;
}
.markdown-katex-preview table {
  margin: 10px 0 15px 0;
  border-collapse: collapse;
}
.markdown-katex-preview table th {
  font-weight: bold;
}
.markdown-katex-preview table td,
.markdown-katex-preview table th {
  border: 1px solid #ddd;
  padding: 3px 10px;
}
.markdown-katex-preview table th {
  padding: 5px 10px;
}
.markdown-katex-preview img {
  max-width: 100%;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.markdown-katex-preview .emoji {
  max-width: none;
}
.markdown-katex-preview span.frame {
  display: block;
  overflow: hidden;
}
.markdown-katex-preview span.frame > span {
  display: block;
  float: left;
  width: auto;
  padding: 7px;
  margin: 13px 0 0;
  overflow: hidden;
  border: 1px solid #ddd;
}
.markdown-katex-preview span.frame span img {
  display: block;
  float: left;
}
.markdown-katex-preview span.frame span span {
  display: block;
  padding: 5px 0 0;
  clear: both;
  color: #333;
}
.markdown-katex-preview span.align-center {
  display: block;
  overflow: hidden;
  clear: both;
}
.markdown-katex-preview span.align-center > span {
  display: block;
  margin: 13px auto 0;
  overflow: hidden;
  text-align: center;
}
.markdown-katex-preview span.align-center span img {
  margin: 0 auto;
  text-align: center;
}
.markdown-katex-preview span.align-right {
  display: block;
  overflow: hidden;
  clear: both;
}
.markdown-katex-preview span.align-right > span {
  display: block;
  margin: 13px 0 0;
  overflow: hidden;
  text-align: right;
}
.markdown-katex-preview span.align-right span img {
  margin: 0;
  text-align: right;
}
.markdown-katex-preview span.float-left {
  display: block;
  float: left;
  margin-right: 13px;
  overflow: hidden;
}
.markdown-katex-preview span.float-left span {
  margin: 13px 0 0;
}
.markdown-katex-preview span.float-right {
  display: block;
  float: right;
  margin-left: 13px;
  overflow: hidden;
}
.markdown-katex-preview span.float-right > span {
  display: block;
  margin: 13px auto 0;
  overflow: hidden;
  text-align: right;
}
.markdown-katex-preview code,
.markdown-katex-preview tt {
  padding: 0;
  padding-top: 0.2em;
  padding-bottom: 0.2em;
  margin: 0;
  font-size: 85%;
  background-color: rgba(0, 0, 0, 0.04);
  border-radius: 3px;
  color: #4d4d4c;
}
.markdown-katex-preview code:before,
.markdown-katex-preview tt:before,
.markdown-katex-preview code:after,
.markdown-katex-preview tt:after {
  letter-spacing: -0.2em;
  content: "\00a0";
}
.markdown-katex-preview code br,
.markdown-katex-preview tt br {
  display: none;
}
.markdown-katex-preview del code {
  text-decoration: inherit;
}
.markdown-katex-preview pre > code {
  padding: 0;
  margin: 0;
  font-size: 100%;
  word-break: normal;
  white-space: pre;
  background: transparent;
  border: 0;
}
.markdown-katex-preview .highlight {
  margin-bottom: 16px;
}
.markdown-katex-preview .highlight pre,
.markdown-katex-preview pre {
  padding: 16px;
  overflow: auto;
  font-size: 85%;
  line-height: 1.45;
  background-color: #f7f7f7;
  border-radius: 3px;
}
.markdown-katex-preview .highlight pre {
  margin-bottom: 0;
  word-break: normal;
}
.markdown-katex-preview pre {
  word-wrap: normal;
}
.markdown-katex-preview pre code,
.markdown-katex-preview pre tt {
  display: inline;
  max-width: initial;
  padding: 0;
  margin: 0;
  overflow: initial;
  line-height: inherit;
  word-wrap: normal;
  background-color: transparent;
  border: 0;
}
.markdown-katex-preview pre code:before,
.markdown-katex-preview pre tt:before,
.markdown-katex-preview pre code:after,
.markdown-katex-preview pre tt:after {
  content: normal;
}
.markdown-katex-preview kbd {
  display: inline-block;
  padding: 3px 5px;
  font-size: 11px;
  line-height: 10px;
  color: #555;
  vertical-align: middle;
  background-color: #fcfcfc;
  border: solid 1px #ccc;
  border-bottom-color: #bbb;
  border-radius: 3px;
  box-shadow: inset 0 -1px 0 #bbb;
}
.markdown-katex-preview .newpage {
  page-break-before: always;
}
@media screen and (min-width: 914px) {
  .markdown-katex-preview {
    width: 854px;
    margin: 10px auto;
    overflow-y: scroll;
    background: #fdfdfd;
  }
}
@media print {
  .markdown-katex-preview {
    background: #fff;
  }
  .markdown-katex-preview h1,
  .markdown-katex-preview h2,
  .markdown-katex-preview h3,
  .markdown-katex-preview h4,
  .markdown-katex-preview h5,
  .markdown-katex-preview h6 {
    color: #222;
  }
  .markdown-katex-preview blockquote {
    color: #777;
  }
  .markdown-katex-preview table,
  .markdown-katex-preview pre {
    page-break-inside: avoid;
  }
  .markdown-katex-preview pre {
    border: 2px solid #f6f6f6;
  }
  .markdown-katex-preview code {
    font-weight: 500;
  }
  .markdown-katex-preview img {
    display: block;
    max-width: 100%;
    max-height: 100%;
  }
}
/*
 * atom-markdown-katex custom style
 */
</style>

<style>
/* http://jmblog.github.com/color-themes-for-google-code-highlightjs */

/* Tomorrow Comment */
.hljs-comment,
.hljs-quote {
  color: #8e908c;
}

/* Tomorrow Red */
.hljs-variable,
.hljs-template-variable,
.hljs-tag,
.hljs-name,
.hljs-selector-id,
.hljs-selector-class,
.hljs-regexp,
.hljs-deletion {
  color: #c82829;
}

/* Tomorrow Orange */
.hljs-number,
.hljs-built_in,
.hljs-builtin-name,
.hljs-literal,
.hljs-type,
.hljs-params,
.hljs-meta,
.hljs-link {
  color: #f5871f;
}

/* Tomorrow Yellow */
.hljs-attribute {
  color: #eab700;
}

/* Tomorrow Green */
.hljs-string,
.hljs-symbol,
.hljs-bullet,
.hljs-addition {
  color: #718c00;
}

/* Tomorrow Blue */
.hljs-title,
.hljs-section {
  color: #4271ae;
}

/* Tomorrow Purple */
.hljs-keyword,
.hljs-selector-tag {
  color: #8959a8;
}

.hljs {
  display: block;
  overflow-x: auto;
  background: white;
  color: #4d4d4c;
  padding: 0.5em;
}

.hljs-emphasis {
  font-style: italic;
}

.hljs-strong {
  font-weight: bold;
}
</style>
<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.5.1/katex.min.css">
</head>
<body class="markdown-katex-preview">
<h2 class="line" data-line="0">Goal</h2>
<p class="line" data-line="2">A “DYI NAS” … REALLY its not a “real
NAS” and data redundancy is not import … it is sort of a way to put
my external hdds (one at a time) on my network to be accessible by
anything from any of my three (my Toshiba is still alive and
kicking) computers and Pi 2.</p>
<h2 class="line" data-line="4">My Idea</h2>
<ol>
<li>
<p class="line" data-line="6">Get a third Hub … use that connected
to my Pi2 and connect to the hdd THROUGH the Pi2 through various
devices … all I really need for this to work ( other than setting
stuff like Samba up perhaps on the distro on the pi2) is a another
hub since the Pi2 cant give enough power to the ext hdd(s.)</p>
<p class="line" data-line="8">###Hub options atm</p>
<h4 class="line" data-line="10">Needs:</h4>
<p class="line" data-line="11">A POWERED hub for a decent
price-vs-value … The charging stuff and number of ports is NOT
IMPORTANT other than “bang for my buck”</p>
<hr>
<p class="line" data-line="14"><strong>REGARDLESS of what price you
see by default there is only a $2 difference between where I’d get
them</strong></p>
<ul>
<li>
<p class="line" data-line="16"><a href=
"http://www.amazon.com/gp/product/B005P2BY5I?psc=1&amp;redirect=true&amp;ref_=ox_sc_act_title_1&amp;smid=A3HIHADV23VGU1">
Plugable USB 2.0 4-Port High Speed Charging Hub with 12.5W Power
Adapter and BC 1.1 Charging Support</a></p>
<ul>
<li>
<p class="line" data-line="18">Not sure if I’d EVER need this “BC
Charging thing” but I am not against getting a hub that has it</p>
</li>
<li>
<p class="line" data-line="19">This I found is $2 cheaper thanks to
the seller (who really is a nice guy … even before this fact ) who
is giving me a discount since i am a returning customer. The debate
between hubs was still a debate before this fact, though I was
leaning a tad toward the hub listed below … that $2 discount MAY
switch me to this one.</p>
</li>
</ul>
</li>
<li>
<p class="line" data-line="21"><a href=
"http://www.amazon.com/gp/product/B00R5ZA20G?psc=1&amp;redirect=true&amp;ref_=ox_sc_act_title_2&amp;smid=A3EFFHTP6B6TNZ">
Sabrent 7 Port USB 2.0 HUB + 2 Charging Ports with 5V/4A Power
Adapter</a></p>
<ul>
<li>
<p class="line" data-line="23">This one caught my eye first … it
doesn’t have that BC 1.1 standard though it has 7 ports + 2
“regular charging ports” … it doesn’t support that BC charging
standard.</p>
</li>
</ul>
</li>
</ul>
</li>
<li>
<p class="line" data-line="25">INSTEAD of another hub, get another
(despite having a few already without USb) another router WITH USB
and HOPEFULLY the external hdd which cant be powered with the pi 2
without the hub due to power consumption … can be powered by this
new hypothetical router with USB support WITHOUT the need for
another hub…</p>
<ul>
<li>
<p class="line" data-line="27">if i’d need a hub to power the ext.
hard drive WITH the router … well SCREW THAT, thats against the
ENTIRE POINT of the router idea. i have NO PROBLEM just using the
pi 2 which is usually always on anyway</p>
</li>
</ul>
</li>
</ol>
<hr>
<p class="line" data-line="31"><strong>SUMMARY:</strong></p>
<p class="line" data-line="33">My GOAL is a that DYI NAS and my
ideas for the way I want to do this (I DO NOT WANT TO GO NUTTY ON
THE PRICE) my options are</p>
<ul>
<li>
<p class="line" data-line="35">USB Hub to powered external hard
drive connected to a Pi 2 which (whatever SD card I have in) is
always on unless there is a bad storm and here in Florida I’d
unplug most of my stuff despite my APC in that case ANYWAY (if
there is bad storm nearby)</p>
</li>
<li>
<p class="line" data-line="37">Router with USb support ( IF THAT
usb support could supply enough power for the ext HDD otherwise
there is no point to the router “route”)</p>
</li>
</ul>
</body>
</html>
