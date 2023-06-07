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
<ol> 
  <li> 
    <strong>COMMON SENSE</strong>
    <div>While I'd never say "forget security software, just use common sense alone".... do not underestimate this.</div>Sure SOME products are "snake oil", but there are some trusted names in the fields of different sorts of security products
  </li>
  <li><strong>Use a Good Anti-Virus</strong>
    <div>Here are two good, free options:</div>
    <div class="row">
      <div class="col"> 
        <ul>
          <li> <a href="https://support.kaspersky.com/us/kscloud" target="_blank"><img class="icon--size32 mr-2" src="/techHQ/progIcons/security/AVs/kaspersky.png" alt="Kaspersky Security Cloud graphics">Kaspersky Security Cloud</a></li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li> <a href="https://www.bitdefender.com/solutions/free.html" target="_blank"><img class="icon--size32 mr-2" src="/techHQ/progIcons/security/AVs/bitDefender.png" alt="Bit Defender Free graphic">Bit Defender Free</a></li>
        </ul>
      </div>
    </div>
  </li>
</ol>


<?php
  include $siteRoot . "/techHQ/security/sections/malwareScanners.php";
  include $siteRoot . "/techHQ/security/sections/specialityScanners.php";
?>

</div>
<!-- </div> -->
