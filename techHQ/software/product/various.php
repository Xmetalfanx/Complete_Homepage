<?php

  $pageTitle = 'Productivity/Office Programs - Various';

  switch ($_SERVER['HTTP_HOST']) {
    case 'xmetal.x10.mx':
        $siteRoot = 'xmetal.x10.mx';
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
  var localSubCat = 'various';
</script>
