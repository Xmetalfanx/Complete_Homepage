<?php

      $pageTitle = 'Ad/Content Blocking - Dynamic Filters in Ublock Explained';
      
      $path = getenv('DOCUMENT_ROOT'); 
      include $path . "/templates/tech/open/baseTechBrowser.tpl";

?>
<h2>What are the red, green and black settings and what do they mean?</h2>

<p>First lets “name” the levels</p>
  <ul>
    <li>Green - Allow</li>
    <li>Red - Block/Deny</li>
    <li>Black/Grey - “Noop”</li>
  </ul>
  <p>
    <em>I will not go into too much details since this for the most part is self-explainitory</em>
  </p>



  <h3>Dynamic Filtering in Ublock Explained</h3>
<ul>
<li>
  <p><a href="https://github.com/gorhill/uBlock/wiki/Overview-of-uBlock's-network-filtering-engine">uBlock &quot;filtering chart&quot; wiki page</a></p>
</li>
<li>
  <p><a href="https://github.com/gorhill/uBlock/wiki/Dynamic-filtering:-quick-guide">Dynamic Filtering Guide by Gorhill</a></p>
</li>
</ul>
<h4>What is a Dynamic Filter?</h4>
<p>A Dynamic filter is a more advanced filter than the regular static filter found in blocklists that are used by Ublock of known ads/other content to block.</p>
<p>Even after you enable advanced mode in Ublock Origin, NO dynamic filter is set by Default.</p>
<h4>Dynamic Rule vs Static Rule</h4>
<ul>
<li>Static Rules are ones set if you do not have advanced mode on (even IF YOU do too ...) and are controlled by the filter lists that Ublock Origin uses</li>
<li>Dynamic Rules are ones set in advanced mode (not enabled by default) and they override static filters</li>
</ul>
<p>Source: https://github.com/gorhill/uBlock/wiki/Dynamic-filtering:-quick-guide</p>
<hr>
<h4>Example of what this can mean</h4>
<p>note: LOCAL dynamic filters override global dynamic filters</p>
<p>You can set an allow rule to override a static block rule that is breaking the site or element on the site you are on.  By having a strict (say for allowing a particular domain in the site in question), you do not have to disable Ublock Origin entirely for that site. </p>
<p>If you say have a global rule for domain set to block (blocks that request from that specific domain on any site you visit),but want to have more control on that exact site you are currently browsing, you have options</p>
<ul>
<li>you can set a domain's rule on the site you are on to GREEN to allow all connections.  THIS WILL OVERRIDE ANY Static rule/filter list block </li>
<li>if the global rule for that domain is say "block", you can set the local rule for that domain on the site you are on to "noop" (explanation page for this is on my TODO list) ... this turns off dynamic filtering but would still block the connection, if a match is found in the static list.   Noop in a sense would be "do not block the request as the dynamic rule says ... in fact ignore that all together... HOWEVER, IF the request triggers a filter from an ad list, FOLLOW that block, and block the content, based on the Static rule that was triggered" (again remember "static rules" are the lists of say known advertisers, that adblockers use)</li>
</ul>


<?php include $path . "/modules/tech/baseTechFooter.tpl"; ?>
