<?php

	$pageTitle = 'Adding PPAs to any Ubuntu Based Distro';

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

	include $siteRoot . "/templates/linux/open/baseLinuxTutorBlank.tpl";
?>

<p> This code was removed as it was massively out of date, I will update it soon </p>

<?php require $siteRoot ."/modules/footer.tpl"; ?>
