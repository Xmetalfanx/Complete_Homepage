<?php

	
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

	$download = '  <a href="http://fedoraproject.org/get-fedora.html" target="_blank">http://fedoraproject.org/get-fedora.html</a><br>
      <a href="http://torrent.fedoraproject.org/" target="_blank">http://torrent.fedoraproject.org/</a><br>
      <a href="http://mirrors.fedoraproject.org/publiclist" target="_blank">http://mirrors.fedoraproject.org/publiclist</a> ' ;

	$pageTitle = 'Fedora';

?>

<script type="text/javascript">
	var localDistroName = "fedora";
</script>