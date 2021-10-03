<?php

      $the_title= 'Xmetalfanx Security Section - Backing up updates from Avast, Avira, and Malwarebytes via Bat File and 7-zip';

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
 include $siteRoot . "/templates/tech/baseTechSoftware.tpl";

?>

<script type="text/javascript">
  var localMainCat = 'security';
  var localSubCat = 'antithreats';
</script>
