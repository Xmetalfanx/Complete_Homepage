<?php

	 $the_title = 'Xmetalfanx Browser Section - ';
	 $sitePath = "/home/xmetalx1/public_html";
	 include $sitePath . "/templates/tech/baseTechBrowserTemp.tpl";
?>

 <h1>Ad/Popup Blockers</h1>

	<h4>Adblockers I like, filtered by Browser</h4>
    <br /><br />


	<h3 id="firefox"><img src="/graphics/progIcons/browsers/firefox_1.png"  class="iconsLeft">Firefox</h3> <br />

		<div class="adblockList">
			 $AdguardFFicon
			  $UblockFFicon
			 $ABEicon
			 $EHicon
		</div>



		<p>Note: The Dev of Adblock Edge notes that “Ublock ORIGIN, is better” and is cross-browser,
			so you “may want to use that” (My quotes, <br />not his/her’s)</p>


   <h4 id="chromium/google-chrome">
	<img src="/graphics/progIcons/browsers/chrome.png"  class="iconsLeft">Chromium/Google Chrome
   </h4>


   <div class="adblockList" >

		<a href="https://chrome.google.com/webstore/detail/adguard-adblocker/bgnkhhnnamicmpeenaelnjfhikgbkllg?hl=pl">
        		<img src="/techHQ/browsers/adblocking/icons/adguard.png"  class="iconsLeft" >Adguard</a>
		$UblockChromeicon
   </div>

	<br />


	<h4>Opera</h4>
    <div class="adblockList" >
		 $UblockOperaicon
		 $AdGuardOperaicon
    </div>

	<br />
	<h3 id="palmoon">Palmoon</h3>
    <ul>
      <li>
        <a href="https://addons.palemoon.org/extensions/privacy-and-security/adblock-latitude/">Adblock Latitude</a>
      </li>
    </ul>

   <hr class="section" />


   <h2>Adblockers filtered by Add-on</h2>

   <h4>Adguard</h4>
   <img src="/techHQ/browsers/adblocking/icons/adguard.png"  class="iconsLeft">
     <div  class="adblockList" >
		$AdguardFFicon
    	$AdGuardChrome

    </div>


   <h4>Adblock Edge</h4>
      <img src="/techHQ/browsers/adblocking/icons/abe.png"  class="iconsLeft">

	  <ul class="adblockList" >

	  <li>
        <p>
          <a href="https://addons.mozilla.org/en-us/firefox/addon/adblock-edge/">Adblock Edge - Discontinued/No longer developed
          for Firefox ONLY</a>
        </p>
        <p>Note: The Dev of Adblock Edge notes that “Ublock is better” and is cross-browser, so you “may want to use that”
        (My quotes,
        <br />not his/her’s)</p>

	   <ul>
          <li>Element Hider Add-on for Adblock Edge</li>
        </ul>
      </li>
    </ul>

	<h4>
	<img src="/techHQ/browsers/adblocking/icons/ublockO.png" class="iconsLeft" >Ublock Origin</h4>
      <div  class="adblockList" >
           $UblockFF
           $UblockChromeicon
           $UblockOperaicon
    </div>

	<h3 id="palmoon">Palmoon</h3>
    <ul>
      <li>
        <a href="https://addons.palemoon.org/extensions/privacy-and-security/adblock-latitude/">Adblock Latitude</a>
      </li>
    </ul>


<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
