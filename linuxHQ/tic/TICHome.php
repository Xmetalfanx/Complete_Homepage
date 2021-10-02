<?php
		$pageTitle = 'Frontpage';

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

    include $siteRoot . "/templates/linux/open/baseLinuxTIC.tpl";
?>

    <img src="/linuxHQ/graphics/mac_win_lin.jpg" alt="Mac Windows and  Linux with Tux Graphic"/><br />
    This section will contain Themes, Icon pack, and cursor information.


    <p>Many of the these themes were found Via Charlie Henson</p>
    <ul>
      <li><a href="http://charlie-henson.deviantart.com/">Charlie Henson DeviantArt Page </a>,</li>
      <li><a href="https://www.youtube.com/user/microfreaks1">Charlie Henson Youtube Channel</a>,</li>
      <li><a href="https://plus.google.com/+CharlieHenson/posts">Charlie Henson on Google+</a>,</li>
      <li><a href="https://twitter.com/MicroFreaks">Charlie Henson on Twitter</a></li>
    </ul>

</div>
</div>
<?php require $siteRoot ."/modules/footer.tpl"; ?>
