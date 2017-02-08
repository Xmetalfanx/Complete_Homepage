<?php

	 $the_title = 'Browser Section - Ad/Content Blocking - Noop Filters Explained';
	 $sitePath = "/home/xmetalx1/public_html";
	 include $sitePath . "/templates/tech/baseTechBrowserTemp.tpl";

?>
		<h3>Noop Filters </h3>

		<p>What happens is when you set a domain to <span class="green"> <em>Allow</em> (Green) </span>, it will bypass the static (filter-list) filters.  (Found in the "3rd Party Filter" section of Ublock Origin's Dashboard)
		</p>

		<p>What the NOOP filter does is it allow the item from the domain you set the <em>Noop</em> filter (grey/black) on, THOUGH UNLIKE <em>Allow</em> it STILL APPLIES, the static (3rd party) filters. </p>

		<p>I can say, that using <em>Allow</em> instead of <em>Noop</em> has not been an issue for me, though I think i would still have used Noop before, as I had been making a mistake with my logic vs the way Ublock filters, since I started using it.</p>


		<hr>
		<h5>My Mistake</h5>
		<ul>
			<li>NOTE: THIS IS WRONG </li>
		</ul>

		<p>I was under the under the impression <span class="green"> <em>Allow</em> (Green) </span> would of course allow the content from that domain, though the static filters were still applied <em>to that content</em>.  This would mean, if something from an <em>allowed domain</em> gets &quot;flagged&quot; in one of the 3rd party blocklists, then just that flagged element would be blocked, but the rest of the content, would be allowed... IF I AM UNDERSTAND THIS RIGHT ... </p>

		<p>THAT is how NOOP RULES work... no matter what is in the static blocklists, the content that got flagged (in my example) would still be display/sen


<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
