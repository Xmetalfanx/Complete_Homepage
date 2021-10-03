<?php

	$pageTitle = 'Yosemite Theme Page';

  $YosThemeSShot = '<img src="#" alt="Noobslab Arc-Theme screenshot" /> <br />Image courtesy of <a href="http://www.noobslab.com/2016/06/arc-theme-light-dark-versions-and-icons.html" target="_blank">  </a> ';

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

  include $siteRoot . "/templates/linux/baseLinuxTIC.tpl";
?>

<script type="text/javascript">
	var localTICName = "yosembiance";
</script>
