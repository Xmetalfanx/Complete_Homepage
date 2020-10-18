<?php

	 $pageTitle = 'Browser Section Frontpage';
	 
	 $path = getenv('DOCUMENT_ROOT');
	 include $path . "/templates/tech/open/baseTechBrowser.tpl";
?>

	 

<h2>Browser Section Intro</h2>
<div class="py-3">

	<!-- leave the font/fork awesome code until i know if i need to move the aria-hidden part over to the img tag -->
	<i class="fa fa-firefox fa-3x text-dark" aria-hidden="true"></i>
	<img src="/graphics/simpleIcons/techHQ/browsers/firefox.svg" alt="Firefox svg from Simple Icons">


	<i class="fa fa-chrome fa-3x text-dark" aria-hidden="true"></i>
	<img src="/graphics/simpleIcons/techHQ/browsers/googleChrome.svg" alt="Google Chrome SVG from Simple Icons">


</div>



<p>This is the New Browsers Section.</p>

<p>This section will contain information on browser addons and what ones I find most useful to improve your web-browsing experience.</p>&#x9;

<p>This will not just Firefox as it use to be on my site, but will also contain Opera, Chrom* (Chromium and Google Chrome) browser info as well as new browsers such as Vivaldi</p>


<p>IMPORTANT: this section is under heavy construction at the moment</p>


</div>
	</div>


<?php include($path . '/modules/baseTechFooter.tpl'); ?>
