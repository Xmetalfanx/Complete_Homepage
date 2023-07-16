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

<h3>Overall Security Tips</h3>
<p>Remember - Just because your anti-virus or malware scanner says you:</p>
<ul>
  <li>"Are infected" does not make it true, if it is a poor scanner</li>
  <li>"Are not infected" does not mean you are not, again ... if its a poor scanner</li>
</ul>

<?php
  include $siteRoot . "/techHQ/security/sections/freeAVScanners.php";
  include $siteRoot . "/techHQ/security/sections/malwareScanners.php";
  include $siteRoot . "/techHQ/security/sections/specialityScanners.php";
?>

</div>
<!-- </div> -->
