<?php

	 $the_title = 'Xmetalfanx Browser Section - Ad/Content Blocking - Ad/Content Blocking Basics ';
	 $sitePath = "/home/xmetalx1/public_html";
	 include $sitePath . "/templates/tech/baseTechBrowserTemp.tpl";
?>

		<h1>Ad/Tracker Blocking Basics</h1>

		<hr class="section" />

		<h2>Steps to setting up basic  blocking</h2>
		<ol>
		  <li>Pick the browser you want use</li>
		  <li>Pick the addon you want to try</li>
		  <li>Install it and most of them are ready to go “out of the gate”… sure you can add lists to block more items, but if
		  you do not want to, you do not need to</li>
		</ol>

		<h2>Adblockers I like, filtered by Browser</h2>


		<div id="adblockList">

		<h3><img src="/graphics/progIcons/browsers/firefox_1.png"  class="iconsLeft">Firefox</h3>

		<ul>
		  <li>
			<img src="/techHQ/browsers/adblocking/icons/adguard.png"  class="iconsLeft">
			<a href="https://addons.mozilla.org/en-us/firefox/addon/adguard-adblocker/">Ad-guard</a>
		  </li>

		  <li>
			<img src="/techHQ/browsers/adblocking/icons/ublockO.png" class="iconsLeft" >
			<a href="https://addons.mozilla.org/en-us/firefox/addon/ublock-origin/">Ublock Origin</a></li>
		  <li>
			<p>
			  <a href="https://addons.mozilla.org/en-us/firefox/addon/adblock-edge/">Adblock Edge - Discontinued/No longer
			  developed</a>
			</p>

			<p>Note: The Dev of Adblock Edge notes that “Ublock is better” and is cross-browser, so you “may want to use that”
			(My quotes, <br />not his)</p>
		  </li>

		  <li><a href="https://addons.mozilla.org/en-us/firefox/addon/elemhidehelper/" >Element Hider Add-on for Adblock Edge </a></li>
		</ul>


		<h3><img src="/graphics/progIcons/browsers/chrome.png"  class="iconsLeft">Chromium/Google Chrome</h3>

		<ul>
		  <li>
			<img src="/techHQ/browsers/adblocking/icons/adguard.png"  class="iconsLeft">
			<a href="https://chrome.google.com/webstore/detail/adguard-adblocker/bgnkhhnnamicmpeenaelnjfhikgbkllg?hl=pl">Adguard</a>
		  </li>
		  <li>
			<img src="/techHQ/browsers/adblocking/icons/ublockO.png" class="iconsLeft" >
			<a href="https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm?hl=en">Ublock Origin</a>
		  </li>
		</ul>
	 <br />

	 <h3>Opera</h3>
		<ul>
		  <li><img src="/techHQ/browsers/adblocking/icons/ublockO.png" class="iconsLeft" >
			<a href="https://addons.opera.com/en/extensions/details/ublock/?display=en">Ublock Origin</a>
		  </li>

		  <li><img src="/techHQ/browsers/adblocking/icons/adguard.png"  class="iconsLeft">
			<a href="https://addons.opera.com/en/extensions/details/adguard/?display=en">Adguard</a>
		  </li>
		</ul>

<br />
	   <h3>Palmoon</h3>
		<ul>
		  <li>
			<a href="https://addons.palemoon.org/extensions/privacy-and-security/adblock-latitude/">Adblock Latitude</a>
		  </li>
		</ul>
	   </div>

	   <hr class="section" />

	   <h3>Knowing if Ublock is Enabled/Disabled</h3>

		<ul>
		  <li>
			<h4>Adblock Edge</h4>
			<br /><img src="/techHQ/browsers/adblocking/icons/abe.png"  class="iconsLeft">

			<br /><br />
			<img src="/techHQ/browsers/adblocking/screenshots/abe/abeOn.jpg" alt="AdBlock Edge Enabled" />
			<br />AdBlock Edge Enabled
			<br />

			<br />
			<img src="/techHQ/browsers/adblocking/screenshots/abe/abeOff.jpg" alt="AdBlock Edge Disabled Completely" />
			<br />AdBlock Edge Disabled Completely

			<br /><br />
			<img src="/techHQ/browsers/adblocking/screenshots/abe/abeDisableSpecific.jpg" alt="AdBlock Edge Disabled Per-site" />
			<br />AdBlock Edge Disabled Per-site

			<br /><br />
			<img src="/techHQ/browsers/adblocking/screenshots/abe/abeDisablePageOnly.jpg" alt="AdBlock Edge Disabled Per-site 2" />
			<br />AdBlock Edge Disabled Per-site 2<br />
		  </li>
		</ul>

		<br /><hr />

	   <ul>
		  <li>

			<h4><img src="/techHQ/browsers/adblocking/icons/adguard.png"  class="iconsLeft">Adguard <br /></h4>

			<img src="/techHQ/browsers/adblocking/screenshots/adguard/adguardOn.jpg" alt="Adguard Enabled" width="700px"
		  height="400px" />
			<br />Adguard Enabled <br />

		  <img src="/techHQ/browsers/adblocking/screenshots/adguard/adguardSiteOff.jpg" alt="Adguard Disabled Per-site" width="700px"
		  height="400px" />
		  <br />Adguard Enabled</p>

		  <img src="/techHQ/browsers/adblocking/screenshots/adguard/adguardTotallyOFF.jpg" alt="Adguard Disabled Completely"
		  width="700px" height="400px" />
		  <br />Adguard Disabled Completely</p></li>
		</ul>
		<ul>
		  <li>

		  <br /><hr />
		  <h4><img src="/techHQ/browsers/adblocking/icons/ublockO.png" class="iconsLeft" >Ublock</h4>
		  <img src="/techHQ/browsers/adblocking/screenshots/ublock/ublockEnabled.jpg" alt="Ublock Enabled" width="60%" height="60%"
		   />


		  <br />Ublock Enabled - Notice Blue "circle"</li>		  <br />

		  <li style="list-style: none">
		  <img src="/techHQ/browsers/adblocking/screenshots/ublock/ublockDisabled.jpg" alt="Ublock Disabled" width="800px"
		  height="350px" />
		  <br />Ublock Disabled - Greyed out "circile"</li>
		</ul>

<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
