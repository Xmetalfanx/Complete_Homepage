<?php
	$pageTitle = ' Security Section - Internet Protection';

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

  include $siteRoot . "/templates/tech/open/baseTechSecurity.tpl"; 

?>


<div class="card w-90">
  <div class="card__header">Here is a general guide to protection yourself online.</div>
  <div class="card__body">
    <ol>
      <li>DO NOT ... under-estimate common sense</li>
      <li><a href="#goodAntivirus">Use a good Antivirus program and have a good second opinion scanner</a></li>
      <li>Web Browser Addons</li>
      <li>REMEMBER ... just because you are seeing something that you are not familiar with ... doesn't mean "someone is hacking you".</li>
      <ul>
        <li>I have seen users with that mindset and it's hard to say troubleshoot a tech issue when they are CONVINCED THEY are being hacked, when the real issue is say a missing driver or some setting getting misconfigured. HAVING SAID THAT...it is better to be safe than sorry, but ... again we are back to "use common sense" here.</li>
      </ul>
    </ol>
  </div>
</div>
<div class="card w-90">
  <div class="card__header" id="goodAntivirus">Use a good Antivirus and have a good Second Opinion Scanner</div>
  <div class="card__body">
    <a href="/techHQ/security/infectionProtection.php">My Infection Protection page covering the subject</a>
    <br/><br/>
    Second Opinion Scanners are good lines of defense, sometimes picking up or handling infections that some Anti-viruses may miss</div>
</div>


<div class="card w-90">
  <div class="card__header">Here is a general guide to protection yourself online.</div>
  <div class="card__body">
    <ol>
      <li>DO NOT ... under-estimate common sense</li>
      <li><a href="#goodAntivirus">Use a good Antivirus program and have a good second opinion scanner</a></li>
      <li>Web Browser Addons</li>
      <li>REMEMBER ... just because you are seeing something that you are not familiar with ... doesn't mean "someone is hacking you".</li>
      <ul>
        <li>I have seen users with that mindset and it's hard to say troubleshoot a tech issue when they are CONVINCED THEY are being hacked, when the real issue is say a missing driver or some setting getting misconfigured. HAVING SAID THAT...it is better to be safe than sorry, but ... again we are back to "use common sense" here.</li>
      </ul>
    </ol>
  </div>
</div>
<div class="card w-90">
  <div class="card__header" id="goodAntivirus">Use a good Antivirus and have a good Second Opinion Scanner</div>
  <div class="card__body">
    <a href="/techHQ/security/infectionProtection.php">My Infection Protection page covering the subject</a>
    <br/><br/>
    Second Opinion Scanners are good lines of defense, sometimes picking up or handling infections that some Anti-viruses may miss
  </div>
</div>
<div class="card w-90">
  <div class="card__header">Web Browser Addons</div>
  <div class="card__body">
    <div class="d-flex w-90 mx-auto">
      <div class="card w-50 mx-auto border--dark" id="httpsEverywhere">
        <div class="card__body">
          <div class="d-flex"><img class="icon--size32" src="/techHQ/browsers/addons/graphics/HTTPSEverywhere.svg" alt="HTTPS Everywhere icon ">
            <h4 class="pl-0">HTTPS Everywhere</h4>
          </div>
          <div>description here</div>
          <div class="row py-3 w-50">
            <div class="mx-auto">
              <div class="col">
                <a href="https://chrome.google.com/webstore/detail/https-everywhere/gcbommkclmclpchllfjekcdonpmejbdp?utm_source=chrome-ntp-icon" target="_blank">
                <img class="icon--size48" src="/techHQ/progIcons/internet/browsers/chrome.svg" alt="HTTPS Everywhere Chrome icon"></a></div>
              <div class="col"><a href="https://addons.mozilla.org/en-GB/firefox/addon/https-everywhere/" target="_blank">
              <img class="icon--size48" src="/techHQ/progIcons/internet/browsers/firefox.svg" alt="HTTPS Everywhere Firefox icon"></a>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card w-50 mx-auto border--dark" id="privacyBadger">
        <div class="card__body">
          <div class="d-flex">
            <img class="icon--size32" src="/techHQ/browsers/addons/graphics/privacyBadger.svg" alt="Privacy Badger icon ">
            <h4 class="col-auto pl-0"> Privacy Badger</h4>
          </div>
          <div>description here, perhaps</div>
          <div class="row py-3 w-50">
            <div class="mx-auto">
              <div class="col">
                <a href="https://chrome.google.com/webstore/detail/privacy-badger/pkehgijcmpdhfbdbbnkijodmdjhbjlgp?hl=en-US" target="_blank">
              <img class="icon--size48" src="/techHQ/progIcons/internet/browsers/chrome.svg" alt="Privacy Badger Chrome icon"></a></div>
              <div class="col"><a href="https://addons.mozilla.org/en-US/firefox/addon/privacy-badger17/?src=search" target="_blank"><img class="icon--size48" src="/techHQ/progIcons/internet/browsers/firefox.svg" alt="Privacy Badger Firefox icon"></a></div>
            </div>
          </div>
        </div>
      </div>

      <div class="card w-50 mx-auto border--dark" id="ublockO">
        <div class="card__body">
          <div class="d-flex">
            <img class="icon--size32" src="/techHQ/browsers/addons/graphics/ublockOrigin.svg" alt="Ublock Origin icon ">
            <h4 class="pl-0"> Ublock Origin</h4>
          </div>
          <div>description here, perhaps</div>
          <div class="row py-3 w-50">
            <div class="mx-auto">
              <div class="col">
                <a href="https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm?utm_source=chrome-ntp-icon" target="_blank">
                <img class="icon--size48" src="/techHQ/progIcons/internet/browsers/chrome.svg" alt="Ublock Origin Chrome icon"></a></div>
              <div class="col">
                <a href="https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/?src=search" target="_blank">
                <img class="icon--size48" src="/techHQ/progIcons/internet/browsers/firefox.svg" alt="Ublock Origin Firefox icon"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card w-50 mx-auto border--dark" id="umatrix">
        <div class="card__body">
          <div class="d-flex">
            <img class="icon--size32" src="/techHQ/browsers/addons/graphics/umatrix.png" alt="Umatrix icon">
            <h4 class="col-auto pl-0"> Umatrix</h4>
          </div>
          <div>description here, perhaps</div>
          <div class="row py-3 w-50">
            <div class="mx-auto">
              <div class="col"><a href="https://chrome.google.com/webstore/detail/umatrix/ogfcmafjalglgifnmanfmnieipoejdcf?utm_source=chrome-ntp-icon" target="_blank"><img class="icon--size48" src="/techHQ/progIcons/internet/browsers/chrome.svg" alt="Umatrix Chrome icon"></a></div>
              <div class="col"><a href="https://addons.mozilla.org/en-US/firefox/addon/umatrix/?src=search" target="_blank"><img class="icon--size48" src="/techHQ/progIcons/internet/browsers/firefox.svg" alt="Umatrix Firefox icon"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- needed -->
</div>

<?php require $siteRoot . "/modules/tech/baseTechFooter.tpl"; ?>
