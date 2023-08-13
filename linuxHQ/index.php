<?php

    $sectionTitle='';
    $pageTitle="LinuxHQ Frontpage";

    switch ($_SERVER['HTTP_HOST']) {
      case 'xmetal.x10.mx':
          $siteRoot = '/home/xmetalx1/domains/xmetal.x10.mx/public_html/';
          break;
      case 'xmetal.awardspace.us':
          $siteRoot = '/srv/disk1/xmetalfanx/www/xmetal.awardspace.us/';
          break;
      default:
          $siteRoot = 'local.domain';
          break;
    }

    include ($siteRoot . 'templates/linux/open/baseLinuxTemplateL.tpl');
?>


<div class="primary-content">
  <div class="card">
    <div class="card__header">My Goal</div>
    <div class="card__body d-flex flex-dir-rows flex-wrap jc-around">
      <img class="p-0 d-none d-md-block thumbnail-fluid--sm" src="/linuxHQ/screenshots/ubuntu/cinnamonMint.png" alt="Linux Mint screenshot" loading="lazy">
      <div>
         Showing Tutorials, My reviews (as well as others), and sites that have helped me over	the years, is TRUE goal I have with this section. The Linux related ideas I came up with to add to the main site started to get way out of hand to put in a "small section" so that's when I decided to do the split into TechHQ (former Windows Section ... and still has some cross-platform stuff) and LinuxHQ. This section has info on:<br>
        <ul>
          <li>Linux Desktop options including screenshots, system requirments, and info on what version is in what Linux Distrobution</li>
          <li>Linux Distrobution information including currently supported release and desktop options and screenshots</li>
          <li>Theming: Information on Linux Themes, Icon and Cursor packs to custom the look of your Linux desktop</li>
        </ul>
      </div>
      <div class="d-none d-md-flex">
        <img class="d-md-block mx-auto thumbnail-fluid--sm" src="/linuxHQ/screenshots/solus/thumbnails/solusbudgie_tn.png" alt="Solus Budgie slide" loading="lazy">
        <img class="d-md-block thumbnail-fluid--sm" src="/linuxHQ/screenshots/ubuntu/kubuntu.png" alt="Kubuntu 18.04 screenshot"></div>
    </div>
  </div>


<!-- OMGUbuntu RSS feed/news -->
<?php include $siteRoot . "/linuxHQ/modules/omgubuntu.tpl"; ?>
</div>
  <div class="sidebar d-none d-md-block">
    <!-- Distrowatch RSS Feed -->
    <?php include $siteRoot . "/linuxHQ/modules/distrowatch.tpl"; ?>
  </div>

  </div><!-- Ends the mainSection div....flexContainer's div is closed IN the footer file below  -->

  <?php include $siteRoot . "/modules/footer.tpl"; ?>