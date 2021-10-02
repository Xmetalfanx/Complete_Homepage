<?php

	$pageTitle = 'Browser Section Frontpage';

	switch ($_SERVER['HTTP_HOST']) {
		case 'xmetal.x10.mx':
			$siteRoot = 'xmetal.x10.mx';
			break;
		case 'xmetal.awardspace.us':
			$siteRoot = '/srv/disk1/xmetalfanx/www/xmetal.awardspace.us/';
			break;
		default:
			$siteRoot = 'local.domain';
			break;
	  }
	  
	include $siteRoot . "/templates/tech/open/baseTechBrowser.tpl";

?>

<h3>Browser Section Intro</h3>

<div class="py-3 px-0">

	<img src="/graphics/simpleIcons/techHQ/browsers/firefox.svg" alt="Firefox svg from Simple Icons" class="icon--size40" />

	<img src="/graphics/simpleIcons/techHQ/browsers/googleChrome.svg" alt="Google Chrome SVG from Simple Icons" class="icon--size40">

	<p>This is the New Browsers Section.</p>

	<p>This section will contain information on browser addons and what ones I find most useful to improve your web-browsing experience.</p>&#x9;

	<p>This will contain:</p>
	
	<ul class="list-group">
		<li class="list-group-item">
			Chrom* browsers(Chromium and Google Chrome) browser info as well as new browsers such as Vivaldi
		</li>
		<li class="list-group-item">Firefox</li>
		<li class="list-group-item">Palemoon</li>
		<li class="list-group-item">Opera</li>
		<li class="list-group-item">and possibly more </li>
	</ul>
	
	
</div>



<!-- why are these here? -->
</div>
	</div>


<?php include($siteRoot . '/modules/baseTechFooter.tpl'); ?>
