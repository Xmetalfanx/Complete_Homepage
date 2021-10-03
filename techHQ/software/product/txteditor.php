<?php

  $pageTitle = 'Productivity/Office Programs - Text Editors';

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
  var localMainCat = "productivity";
  var localSubCat = 'texteditor';
</script>
