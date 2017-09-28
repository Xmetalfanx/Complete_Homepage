<?php

	 $the_title = 'Xmetalfanx Browser Section - Umatrix Layout ';
	 $sitePath = "/home/xmetalx1/public_html";
	 include $sitePath . "/templates/tech/baseTechBrowserTemp.tpl";

?>

	<h1>Umatrix Layout</h1>
   <h3>The top bar all the way on the left -</h3>

	<p>
      <img src="/techHQ/browsers/adblocking/screenshots/umatrix/globalRulesBlack.jpg"
      alt="Umatrix Global Rule" />
    </p>
    <ul>
      <li>
      <strong>Black</strong> - Global rules for all the filters you see at that time, based on what domains are detected from the
      site your currently on (displayed down the left side ).
      <ul>
        <li>Example - Many weather sites use “VirtualEarth” to display the topography on their maps. If you want, you can go
        here allow all content from VirutalEarth to be Allowed, so you do not have to keep setting the on each (example) weather
        radar page.</li>
      </ul></li>
    </ul>

   <h3>The Main Layout - Spreadsheet Metaphor</h3>
    <p>Think of the the main layout like a spreadsheet.</p>
    <ul>
      <li>The Columns across the top are relations to the content (Cookies, CSS, Frames, Plugins,…etc ).
      <br />
      <img src="/techHQ/browsers/adblocking/screenshots/umatrix/topColumns.jpg" alt="Content Filters Across top" /></li>
    </ul>
    <ul>
      <li>
        <p>The Rows down the left side (that will “populate” when you visit a page) reflect the domains from requests MADE BY
        that page your on
        <br />
        <img src="/techHQ/browsers/adblocking/screenshots/umatrix/siteRules_leftSide.jpg"
        alt="Domain-Site Rules" /></p>
      </li>
      <li>
        <p>Each “cell” (spreadsheet metaphor), has a top and bottom … clicking the top will turn it green which means allow
        this content, while the bottom turns it red, which means block this content.</p>
        <ul>
          <li>thinking like the Global Content Headers at the top (Cookies, CSS, Plugins, …etc) and the domain listed down the
          side (self explanatory) are like Column and Row Headers in a spreadsheet … respectively*</li>
        </ul>
      </li>
    </ul>

	<h3>Two Types of Global Rules</h3>
    <hr class="section" />

	<h4>Global filters based on DOMAIN</h4>

   <ul>
      <li>
      <strong>Location:</strong> The left hand side, going down…one column
      <ul>
        <li>Note: YOU CAN save your settings and even, back them up so if you use Firefox AND Opera, or Chrome, you can simple
        import your settings to the second browser.</li>
      </ul></li>
      <li>
      <strong>Explanation:</strong> These are global settings based on the domain you click on in the list of domains on the left
      hand side</li>
    </ul>
    <hr class="section" />

   <h4>Global Filters based on CONTENT</h4>
    <ul>
      <li>
      <strong>Location:</strong> The Bar across the top with “Cookies”, “Plugins”, “CSS”, “Frames” …etc</li>
      <li>
      <strong>Explanation:</strong> These are global rules that (considering how all of these rules, interact of course) can let
      you manage the content in question block or all) globally. That is across EVERY site/domain.</li>
    </ul>

<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
