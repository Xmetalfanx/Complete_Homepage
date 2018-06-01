<?php

	 $the_title = 'Xmetalfanx Browser Section - Ad/Content Blocking - Ad/Content Blocking Basics ';
	 $sitePath = "/home/xmetalx1/public_html";
	 include $sitePath . "/templates/tech/baseTechBrowserTemp.tpl";
?>

<h1>Ad/Tracker Blocking Basics</h1>
<hr/>
<div class="card">
  <div class="card-block">
    <h4 class="card-title"></h4>Steps to Setting up basic Blocking
    <div class="card-text">
      <ol>
        <li>Pick the browser you want use</li>
        <li>Pick the addon you want to try</li>
        <li>
          Install it and most of them are ready to go &ldquo;out of the gate&rdquo;&mldr; sure you can add lists to block more items, but if
          you do not want to, you do not need to
        </li>
      </ol>
    </div>
  </div>
</div>


<h3></h3>
<div class="card-block">
  <h3 class="card-title">
		<img src="https://png.icons8.com/color/50/000000/firefox.png"/>
	</h3>
  <p class="card-text">
    <div class="row">
      <p class="col-3">
        $ublockIcon
        $uBlockOFirefox
      </p>
      <p class="col-3">
        $adguardIcon
        $adGuardFirefox
      </p>
      <p class="col-3">
        <p>$ABEFirefox Discontinued/No Long Developed</p>
        <p>
          Note: The Dev of Adblock Edge notes that &ldquo;Ublock is better&rdquo; and is cross-browser, so you &ldquo;may want to use that&rdquo;
          (My quotes, <br/>not his)
        </p>
      </p>
    </div>
    <!-- Uh ...what?-->
    <div class="row">$EHFirefox</div>
  </p>
</div>
<div class="card">
  <div class="card-block">
    <h4 class="card-title">img(src='https://png.icons8.com/color/50/000000/chrome.png') Chromium/Google Chrome</h4>
    <p class="card-text">
      <div class="row">
        <div class="col-3">
          $ublockIcon
          $UBlockOriginChrome
        </div>
        <div class="col-3">

          $adguardIcon
          $AdguardChrome
        </div>
      </div>
    </p>
  </div>
</div>
<div class="card">
  <div class="card-block">
    <h4 class="card-title">Opera </h4>
    <p class="card-text">
      <div class="row">
        <div class="col-3">
          $ublockIcon
          $uBlockOriginOpera
        </div>
        <div class="col-3">
          $adguardIcon
          $adGuardOpera
        </div>
      </div>
    </p>
  </div>
</div><br/>
<h3>Palmoon</h3>
<ul>
  <li><a href="https://addons.palemoon.org/extensions/privacy-and-security/adblock-latitude/">Adblock Latitude</a></li>
</ul>
<hr/>
<h3>Knowing if Ublock is Enabled/Disabled</h3>
<ul>
  <li>
    <h4>Adblock Edge</h4><br/>$adblockEdgeIcon<br/><br/><img src="/techHQ/browsers/adblocking/screenshots/abe/abeOn.jpg" alt="AdBlock Edge Enabled"/><br/>AdBlock Edge Enabled<br/><br/><img src="/techHQ/browsers/adblocking/screenshots/abe/abeOff.jpg" alt="AdBlock Edge Disabled Completely"/><br/>AdBlock Edge Disabled Completely<br/><br/><img src="/techHQ/browsers/adblocking/screenshots/abe/abeDisableSpecific.jpg" alt="AdBlock Edge Disabled Per-site"/><br/>AdBlock Edge Disabled Per-site<br/><br/><img src="/techHQ/browsers/adblocking/screenshots/abe/abeDisablePageOnly.jpg" alt="AdBlock Edge Disabled Per-site 2"/><br/>AdBlock Edge Disabled Per-site 2<br/>
  </li><br/>
  <hr/>
</ul>
<div class="row">
  <p>$adguardIcon</p>
  <div class="col-3">

    img(src='/techHQ/browsers/adblocking/screenshots/adguard/adguardOn.jpg', alt='Adguard Enabled', width='700px', height='400px') Adguard Enabled
  </div>
  <div class="col-3">img(src='/techHQ/browsers/adblocking/screenshots/adguard/adguardSiteOff.jpg', alt='Adguard Disabled Per-site', width='700px', height='400px') Adguard Disabled</div>
  <div class="col-3"> img(src='/techHQ/browsers/adblocking/screenshots/adguard/adguardTotallyOFF.jpg', alt='Adguard Disabled Completely', width='700px', height='400px') Adguard Disabled Completely<br/></div>
</div>


<div class="card">
  <div class="card-block">
    <h4 class="card-title">$ublockIcon Ublock Enable vs Disabled </h4>
    <p class="card-text">
			<img src="/techHQ/browsers/adblocking/screenshots/ublock/ublockEnabled.jpg" alt="Ublock Enabled" width="60%" height="60%"/><br/>Ublock Enabled - Notice Blue &quot;circle&quot;<br/>

      <li style="list-style: none">
				<img src="/techHQ/browsers/adblocking/screenshots/ublock/ublockDisabled.jpg" alt="Ublock Disabled" width="800px" height="350px"/><br/>Ublock Disabled - Greyed out &quot;circile&quot;</li>
    </p>
  </div>
</div>


<?php include $sitePath . "/modules/footer.tpl"; ?>
