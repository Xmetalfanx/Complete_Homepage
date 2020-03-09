<?php
	$pageTitle = ' Security Section Frontpage';

  $path = getenv('DOCUMENT_ROOT'); 
  include $path . "/templates/tech/open/baseTechSecurityTemp.tpl";

?>


<div class="card w-90 mx-auto shadow">
  <h2 class="card-header">Here is a general guide to protection yourself online.</h2>
  <div class="card-body">
    <ol> 
      <li>DO NOT ... under-estimate common sense</li>
      <li> <a href="#goodAntivirus">Use a good Antivirus program and have a good second optnion scanner </a></li>
      <li>Web Browser Addons</li>
      <li>REMEMBER ... just because you are seeing something that you are not familiar with ... doesn't mean "someone is hacking you".</li>
      <ul> 
        <li>I have seen users with that mindset and it's hard to say troubleshoot a tech issue when they are CONVINCED THEY are being hacked, when the real issue is say a missing driver or some setting getting misconfigured.   HAVING SAID THAT...it is better to be safe than sorry, but ... again we are back to "use common sense" here.</li>
      </ul>
    </ol>
  </div>
</div>
<hr/>


<div class="card w-90 mx-auto shadow">
  <div class="h3 card-header" id="goodAntivirus">Use a good Antivirus and have a good Second Opinion Scanner</div>
  <div class="card-body"> 
  <a href="/techHQ/security/infectionProtection.php">My Infection Protection page covering the subject</a>
  <br/><br />
  Second Opinion Scanners are good lines of defense, sometimes picking up or handling infections that some Anti-viruses may miss </div>
</div>
<hr/>



<div class="card">
  <h3 class="card-header">Web Browser Addons</h3>
  <div class="card-body">
    <ul>
      <li><a href="#httpsEverywhere">HTTPS Everywhere</a></li>
      <li><a href="#privacyBadger">Privacy Badger</a></li>
      <li><a href="#ublockO">Ublock Origin</a></li>
      <li><a href="#umatrix">(for experienced users) Umatrix</a></li>
    </ul>
    <div class="d-flex flex-wrap w-90 mx-auto">
      <div class="card w-50 mx-auto border border-dark shadow" id="httpsEverywhere">
        <div class="card-body py-2">
          <div class="row">
            <div class="col-auto">
            <img class="iconSM" src="/techHQ/browsers/addons/graphics/HTTPSEverywhere.svg" alt="HTTPS Everywhere icon "></div>
            <h4 class="col-auto pl-0">HTTPS Everywhere</h4>
          </div>
          <div>description here</div>
          <div class="row py-3 mx-auto w-50">
            <div class="col">
            <a href="https://chrome.google.com/webstore/detail/https-everywhere/gcbommkclmclpchllfjekcdonpmejbdp?utm_source=chrome-ntp-icon" target="_blank"><img class="iconLG" src="/techHQ/progIcons/internet/browsers/chrome.svg" alt="HTTPS Everywhere Chrome icon"></a></div>
            <div class="col">
            <a href="https://addons.mozilla.org/en-GB/firefox/addon/https-everywhere/" target="_blank"><img class="iconLG" src="/techHQ/progIcons/internet/browsers/firefox.svg" alt="HTTPS Everywhere Firefox icon"></a></div>
          </div>
        </div>
      </div>
      <div class="card w-50 mx-auto border border-dark shadow" id="privacyBadger">
        <div class="card-body py-2">
          <div class="row">
            <div class="col-auto">
            <img class="iconSM" src="/techHQ/browsers/addons/graphics/privacyBadger.svg" alt="Privacy Badger icon "></div>
            <h4 class="col-auto pl-0"> Privacy Badger</h4>
          </div>
          <div>description here, perhaps</div>
          <div class="row py-3 mx-auto w-50">
            <div class="col">
            <a href="https://chrome.google.com/webstore/detail/privacy-badger/pkehgijcmpdhfbdbbnkijodmdjhbjlgp?hl=en-US" target="_blank"><img class="iconLG" src="/techHQ/progIcons/internet/browsers/chrome.svg" alt="Privacy Badger Chrome icon"></a></div>
            <div class="col">
            <a href="https://addons.mozilla.org/en-US/firefox/addon/privacy-badger17/?src=search" target="_blank"><img class="iconLG" src="/techHQ/progIcons/internet/browsers/firefox.svg" alt="Privacy Badger Firefox icon"></a></div>
          </div>
        </div>
      </div>
      <div class="card w-50 mx-auto border border-dark shadow" id="ublockO">
        <div class="card-body py-2"> 
          <div class="row">
            <div class="col-auto"><img class="iconSM" src="/techHQ/browsers/addons/graphics/ublockOrigin.svg" alt="Ublock Origin icon "></div>
            <h4 class="col-auto pl-0"> Ublock Origin</h4>
          </div>
          <div>description here, perhaps</div>
          <div class="row py-3 mx-auto w-50">
            <div class="col"><a href="https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm?utm_source=chrome-ntp-icon" target="_blank"><img class="iconLG" src="/techHQ/progIcons/internet/browsers/chrome.svg" alt="Ublock Origin Chrome icon"></a></div>
            <div class="col"><a href="https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/?src=search" target="_blank"><img class="iconLG" src="/techHQ/progIcons/internet/browsers/firefox.svg" alt="Ublock Origin Firefox icon"></a></div>
          </div>
        </div>
      </div>
      <div class="card w-50 mx-auto border border-dark shadow" id="umatrix">
        <div class="card-body">
          <div class="row">
            <div class="col-auto"><img class="iconSM" src="/techHQ/browsers/addons/graphics/umatrix.png" alt="Umatrix icon"></div>
            <h4 class="col-auto pl-0"> Umatrix</h4>
          </div>
          <div>description here, perhaps</div>
          <div class="row py-3 mx-auto w-50">
            <div class="col"><a href="https://chrome.google.com/webstore/detail/umatrix/ogfcmafjalglgifnmanfmnieipoejdcf?utm_source=chrome-ntp-icon" target="_blank"><img class="iconLG" src="/techHQ/progIcons/internet/browsers/chrome.svg" alt="Umatrix Chrome icon"></a></div>
            <div class="col"><a href="https://addons.mozilla.org/en-US/firefox/addon/umatrix/?src=search" target="_blank"><img class="iconLG" src="/techHQ/progIcons/internet/browsers/firefox.svg" alt="Umatrix Firefox icon"></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
</div> 

<?php include $path . "/modules/tech/baseTechFooter.tpl"; ?>
