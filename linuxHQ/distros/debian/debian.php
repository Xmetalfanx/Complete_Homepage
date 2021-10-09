<?php

	$pageTitle = 'Debian';

  $download = '<a href="http://www.debian.org/distrib/ftplist" target="_blank">http://www.debian.org/distrib/ftplist</a> <br />
    <a href="http://www.debian.org/CD/" target="_blank">Debian on CD</a> ';

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
 include $siteRoot . "/templates/linux/baseLinuxDistro.tpl";

?>

<script type="text/javascript">
	var localDistroName = "debian";
</script>
