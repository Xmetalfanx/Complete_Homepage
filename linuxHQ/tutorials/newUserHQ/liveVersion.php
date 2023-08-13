<?php

	$pageTitle = 'Live Version Information';

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

<div class="d-flex flex-wrap">
  <div class="card">
    <div class="card__header">“OK, you have me curious, but I do not want to do anything to my system just yet”</div>
    <div class="card__body">
      <p>A-ha !... This is one of the many places where a “Live Version ” comes in. You can try Linux and see how you like it before you commit to anything.  IN FACT, I'd recommend experiencing a distro in live mode, for awhile and seeing if you like it before you do anything to your system.</p>
    </div>
  </div>
  
  <div class="card">
    <div class="card__header">
      Another way Linux (installed or not) can be VERY helpful
    </div>
    <div class="card__body">
      <p>I want to bring up the fact that even if you install Linux but don't use it much..(though a live version works here too) … Linux is a GREAT way to get to your data if Windows has a “meltdown”. Some users are surprised ALL of their data is still there, even when Windows will not even boot into “safe mode”.</p>
    </div>
  </div>
  <div class="card">
    <div class="card__header">Deciding you want to install</div>
    <div class="card__body">
      <p>When you want to install Linux (if you do), there is an &quot;Install Linux&quot; icon on the desktop, that you'd click to start the process.</p>
      <p>Many Linux live versions, even has Gparted by default to setup your partitions <em>(I am working on a section explaining partitions)</em> before you start the process. Although most distrobutions have a friendly interface to setup partitions and do what needs to be done... (I like setting them up with Gparted first.... just my preference.)</p>
    </div>
  </div>
</div>


<?php require $siteRoot ."/modules/footer.tpl"; ?>