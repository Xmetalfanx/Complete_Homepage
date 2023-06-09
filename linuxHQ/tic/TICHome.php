<?php
		$pageTitle = 'Frontpage';

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

    include $siteRoot . "/templates/linux/open/baseLinuxTIC.tpl";
?>

    <img src="/linuxHQ/graphics/mac_win_lin.jpg" alt="Mac Windows and  Linux with Tux Graphic"/><br />
    This section will contain Themes, Icon pack, and cursor information.


</div>
</div>
<?php require $siteRoot ."/modules/footer.tpl"; ?>
