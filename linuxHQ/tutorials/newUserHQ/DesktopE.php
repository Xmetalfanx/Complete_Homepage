<?php

  $pageTitle = 'Desktop Envirnoments';

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


  <h3>&ldquo;What  on earth is this &ldquo;Desktop Environment&rdquo;?..  I had a hard enough time with &ldquo;Distros-vs-versions...etc etc &rdquo; &quot;</h3>

  <p>There is a reason that I left this "for later"....not to overload new users with too many terms all at once.</p>

  <h4>Desktop Environment </h4>
  <p>These may be refered to as &quot;D.E.&quot; 's for short, include things such as the Menus, context (right-click on the mouse)  menu and much more in Windows &hellip; it controls HOW you interact with the Operating System. </p>

<?php require $siteRoot ."/modules/footer.tpl"; ?>