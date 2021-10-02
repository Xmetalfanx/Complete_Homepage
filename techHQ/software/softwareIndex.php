<?php

  $pageTitle = 'Software Section Main Page';

  
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

  include $siteRoot . "/templates/tech/open/baseTechSoftware.tpl";
?>

not sure what to put here atm ... and this MAY BE below the footer for some reason ... the other software pages display correctly though

</div> <!-- closes the primary-content class -->


<!-- include tech footer, than the startpage box and then the regular footer -->
<?php include($siteRoot . '/modules/tech/baseTechFooter.tpl'); ?>
