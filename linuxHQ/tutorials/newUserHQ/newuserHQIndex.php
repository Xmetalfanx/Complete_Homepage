<?php

  $pageTitle = 'New User Section Index Page';

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

<p>
  <img src="../graphics/mac_win_lin.jpg"  alt="" width="250" height="150"/>
</p>

<p>This Section will contain FAQs, Tutorials (may link to my Tutorial section ... just so I do not have duplicate content
in two different sections of the same site, and hopefully clear up some misconceptions about linux</p>

<p>I also plan to show the pros and cons of Linux, proving even I know Linux &quot;is not perfect&quot; </p>


<?php require $siteRoot ."/modules/footer.tpl"; ?>
