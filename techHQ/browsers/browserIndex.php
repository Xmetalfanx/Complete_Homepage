<?php

	 $pageTitle = 'Browser Section Frontpage';
	 $sitePath = "/home/xmetalx1/public_html";
	 include $sitePath . "/templates/tech/baseTechBrowser.tpl";

	 echo '<script type="text/javascript">

	 		output = `

			<h2>Browser Section Intro</h2>

			<i class="fa fa-firefox fa-3x text-dark"></i>
			<i class="fa fa-chrome fa-3x text-dark"></i>


			<p>This is the New Browsers Section.</p>

			<p>This section will contain information on browser addons and what ones I find most useful to improve your web-browsing experience.</p>&#x9;

			<p>This will not just Firefox as it use to be on my site, but will also contain Opera, Chrom* (Chromium and Google Chrome) browser info as well as new browsers such as Vivaldi</p>


			<p>IMPORTANT: this section is under heavy construction at the moment</p>


			`;

			outputLocation = document.getElementById("browserSection");
			outputLocation.innerHTML = output;

	 </script>';
?>


