<?php
	$pageTitle = ' Security Section Frontpage';

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

<h2>Security Related Items</h2>
<p>Remember - Just because your anti-virus or malware scanner says you:</p>
<ul>
  <li>"Are infected" does not make it true, if it is a poor scanner</li>
  <li>"Are not infected" does not mean you are not, again ... if its a poor scanner</li>
</ul>


<h3>Overall Security Tips</h3>
<div class="my-4 card w-80">
  <div class="card__header">COMMON SENSE</div>
  <div class="card__body">
    While I'd never say "forget security software, just use common sense alone".... do not underestimate this.
    Sure SOME products are "snake oil", but there are some trusted names in the fields of different sorts of security products
  </div>
</div>

<div class="my-4 card w-80">
  <div class="card__header">Use a Good Anti-Virus</div>
  <div class="card__body">Here are two good, free options:
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <a href="https://support.kaspersky.com/us/kscloud" target="_blank">
        <img class="icon icon--size48" src="/techHQ/progIcons/security/AVs/kaspersky.png" alt="Kaspersky Security Cloud graphics">Kaspersky Security Cloud</a></li>
      <li class="list-group-item">
        <a href="https://www.bitdefender.com/solutions/free.html" target="_blank">
        <img class="icon icon--size48" src="/techHQ/progIcons/security/AVs/bitDefender.png" alt="Bit Defender Free graphic">Bit Defender Free</a></li>
    </ul>
  </div>
</div>

<?php
  include $siteRoot . "/techHQ/security/sections/malwareScanners.php";
  include $siteRoot . "/techHQ/security/sections/specialityScanners.php";
?>

</div>
<!-- </div> -->


<?php include($siteRoot . '/modules/baseTechFooter.tpl'); ?>
