<?php

	$pageTitle = 'Browser Section Frontpage';

	switch ($_SERVER['HTTP_HOST']) {
		case 'xmetal.x10.mx':
			$siteRoot = '/home/xmetalx1/domains/xmetal.x10.mx/public_html';
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


<div id="browser-frontpage">
  <div id="browsers">
    <h3>Browsers </h3>
    <div class="d-flex row-cols-2">
      <div>
        <h4>Chromium based - Blink Engine </h4>
        <ul>
          <li class="btn"><a href="https://www.google.com/chrome/index.html" target="_blank"><img class="icon" src="/techHQ/progIcons/internet/browsers/chrome.svg" alt="Google Chrome SVG Icon">Google Chrome</a></li>
          <li class="btn"><a href="https://brave.com/" target="_blank"><img class="icon" src="/techHQ/progIcons/internet/browsers/brave.png" alt="Brave Browser Icon">Brave</a></li>
          <li class="btn"><a href="https://vivaldi.com/" target="_blank"> <img class="icon" src="/techHQ/progIcons/internet/browsers/vivaldi.svg" alt="Vivaldi Browser SVG Icon">Vivaldi</a></li>
          <li class="btn"><a href="https://www.microsoft.com/en-us/edge/download?form=MA13FJ" target="_blank"><img class="icon" src="/techHQ/progIcons/internet/browsers/edge.png" alt="Microsoft Edge icon">Micrsoft Edge </a></li>
          <li class="btn"><a href="https://github.com/ungoogled-software/ungoogled-chromium" target="_blank"><img class="icon" src="/techHQ/progIcons/internet/browsers/chromium.png" alt="Chromium/Ungoogle Chromium icon">Ungoogled Chromium</a></li>
        </ul>
      </div>
      <div> 
        <h4>Firefox Based - Geck Engine          </h4>
        <ul class="d-flex"> 
          <li class="btn"><a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank"><img class="icon" src="/techHQ/progIcons/internet/browsers/firefox.svg" alt="Firefox SVG icon">Firefox </a></li>
          <li class="btn"><a href="https://librewolf.net/" target="_blank"><img class="icon" src="/techHQ/progIcons/internet/browsers/librewolf.png" alt="LibreWolf Icon">LibreWolf </a></li>
        </ul>
        <h4>Firefox Based - Goanna Engine </h4>
        <ul class="d-flex">
          <li class="btn"><a href="https://www.basilisk-browser.org/" target="_blank"><img class="icon" src="/techHQ/progIcons/internet/browsers/basilisk.png" alt="Basilisk icon">Basilisk </a></li>
          <li class="btn"><a href="https://www.palemoon.org/" target="_blank"><img class="icon" src="/techHQ/progIcons/internet/browsers/pm_logo.png" alt="Pale Moon Icon">Pale Moon </a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="addons">
    <h3>Browser Addons</h3>
    <div class="jc-start">
      <div class="addon">
        <img class="icon" src="/techHQ/browsers/graphics/icons/ublock-origin.svg" alt="Ublock Origin SVG Icon">
        <div class="addon-name">Ublock Origin</div>
        <div class="addon-descript">Ad/Content Blocker</div>
        <ul class="browsers">
          <li>
            <a href="https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/">
              <img src="/techHQ/progIcons/internet/browsers/firefox.svg" alt="Ublock Origin Firefox"></a>
          </li>
          <li>
            <a href="https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm" target="_blank">
              <img src="/techHQ/progIcons/internet/browsers/chrome.svg" alt="Ublock Origin Chrome Store"></a>
          </li>
          <li>
            <a href="https://github.com/gorhill/uBlock" target="_blank">
              <img src="/graphics/simpleIcons/github.svg" alt="Ublock Origin Github"></a>
          </li>
        </ul>
      </div>
      <div class="addon">
        <img class="icon" src="/techHQ/browsers/graphics/icons/bit-warden.svg" alt="Bit Warden SVG Icon">
        <div class="addon-name">Bit Warden </div>
        <div class="addon-descript">Open-Source Password Manager</div>
        <ul class="browsers">
          <li>
            <a href="https://addons.mozilla.org/en-US/firefox/addon/bitwarden-password-manager/" target="_blank">
              <img src="/techHQ/progIcons/internet/browsers/firefox.svg" alt="Bit Warden Firefox"></a></li>
          <li>
            <a href="https://chrome.google.com/webstore/detail/bitwarden-free-password-m/nngceckbapebfimnlniiiahkandclblb" target="_blank">
              <img src="/techHQ/progIcons/internet/browsers/chrome.svg" alt="Bit Warden Chrome Store"></a>
          </li>
          <li>
            <a href="https://github.com/bitwarden/clients" target="_blank">
              <img src="/graphics/simpleIcons/github.svg" alt="Bit Warden Github">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div id="ytvideos"> 
    <h3>Youtube Videos </h3>
    <ul>
      <li> 
      <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLrh2y86lvcJfqnRKGlfY-dPzJMd59HZ43" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
        
      </iframe>


      </li>
      <li> </li>
      <li></li>
    </ul>
  </div>
  <div id="usefulLinks">
    <h3>Useful Browser Links</h3>
    <div class="d-flex"> 
    <a href="" target="_blank">
        <img src="/techHQ/graphics/privacytests.png" alt="Privacy Tests.org graphic">
      </a>
      <a href="" target="_blank">
        <img src="/techHQ/graphics/privacytoolsio.png" alt="PrivacyTools.io graphic">
      </a>
    </div>
  </div>
</div>


<!-- why are these here? -->
</div>
	</div>

<?php include($siteRoot . '/modules/baseTechFooter.tpl'); ?>
