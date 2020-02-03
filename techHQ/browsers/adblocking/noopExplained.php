<?php

	 $pageTitle = 'Ad/Content Blocking - Noop Filters Explained';

	 $path = getenv('DOCUMENT_ROOT'); 
	 include $path . "/templates/tech/open/baseTechBrowser.tpl";

?>


<div class="card w-75 border mx-auto">
  <h3 class="card-title">Noop Filtering</h3>
  <div class="card-text px-3 mx-auto">
    <div>When using Dynamic (Ublock Origin Advanced Mode) and Static Filtering (the typical filter lists that most adblockers user), together, Dynamic filtering take priority.  For example you could use a green (allow) filter on a site to ALLOW a connection that would have been blocked in the one of the filter lists.  </div>
    <div>Noop filtering DISABLES the Dynamic filtering (even if it's inherited so to speak, and set specifically on a page) but still allows the static filtering to block if need-be.  I guess it's like not setting any dynamic filtering at all on a site for a particular domain but sometimes due to a "dynamic rule being inherited" (again so to speak), you may need this set.</div>
    <div>A Way to think of the three filtering levels is this:</div>
    <ul>
      <li>Green - ALLOW - Green Dynamic Filters allow the connection.  If the item is in one of the enabled blocklists (the Static filtering lists), this will allow the connection anyway... This is an alternative to for that page "turning Ublock Origin off completely"</li>
      <li>Dark Grey - Noop - This disables any dynamic filtering on that particular element but still allows static lists to block, IF the element is found in any of them.</li>
      <li>Red - BLOCK - This blocks an element/connection "no matter what".</li>
    </ul>
    <div>Also remember as I said on another Ublock Origin page I have .. there are Global (this would apply for that domain no matter the page you are on) and local (only applies to that current website you are on, for the domain you are setting a rule for), rules</div>
    <ul>
      <li>Global Rule Example - You could allow "bootstrapcdn.com" on any site you are on by setting it to green or dark-grey 
        <div>(I am not sure why bootstrapcdn.com would be on any filter list, but now that I learned more about Noop... I'd say Noop is better then Allow.... both basically allow, but IF a filter list item gets triggered with Noop ... that element would still be BLOCKED)</div>
      </li>
      <li>Allow -  Dynamic Filtering - Example 1 - Allow domain connection - You could allow (green) a connection from a domain on a site that seems broken.  Since Dynamic Filters overide static filters, this would allow the connection from that domain, even IF it is in a block-list.</li>
      <li>Block - Dynamic Filtering - Example 2 - Just like the last example ... you could BLOCK the connection from a domain, having no affect on if it is in a filter list or not.  If a connection from that domain is detected (again you can set this locally on the current site you are on ... OR Globally on all sites you visit).. it is blocked ... the filter list has nothing to do with it... it's just BLOCKED</li>
    </ul>
  </div>
</div>
<?php include $path . "/modules/tech/baseTechFooter.tpl"; ?>
