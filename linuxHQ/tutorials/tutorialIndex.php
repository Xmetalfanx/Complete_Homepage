<?php

	$pageTitle = 'Tutorial Index Page';

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

  include $siteRoot . "/templates/linux/baseLinuxTutorials.tpl";

  ?>

<i class="fa fa-4x fa-linux" aria-hidden="true" /></i>

<br />

<p>I am not totally sure what is going in this section yet, since I refactored some things </p>


<?php require $siteRoot ."/modules/footer.tpl"; ?>
