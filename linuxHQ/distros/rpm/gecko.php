<?php

$pageTitle = 'Gecko Linux ';

$download 	= '<a href="http://software.opensuse.org/" target="_blank">http://software.opensuse.org/</a><br>
    <a href="http://mirrors.opensuse.org/list/all.html" target="_blank">http://mirrors.opensuse.org/list/all.html</a> ' ;

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
    var localDistroName = "gecko";
</script>
