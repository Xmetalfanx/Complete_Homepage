<?php
	$pageTitle = ' Security Section - Internet Protection';

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
<?php include $siteRoot . "/techHQ/security/modules/securityBrowserAddons.php"; ?>

<!-- needed -->
</div>

<?php require $siteRoot . "/modules/tech/baseTechFooter.tpl"; ?>
