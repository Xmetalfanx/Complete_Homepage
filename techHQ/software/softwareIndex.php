<?php

    $the_title = 'Xmetalfanxs Homepage';
    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>


<div class="row">
  <div class="col-lg-6">

    <?php echo $softpediaIcon; ?>
  </div>
  <div class="col-lg-6">
    <?php echo $majorGeeksIcon; ?>
  </div>
</div>

<div class="card">
  <div class="card-header">Cross Platform </div>
  <div class="card-block">
    <h2 class="card-title">Graphics Applications </h2>
    <div class="card-text">
      <div class="row">
        <div class="col-lg-6">

          <?php echo $kritaIcon . $kritaHome; ?>
          <p>Krita is a graphics editor is an open source graphics/illustrator program, which some users compare to Adobe Photoshop</p>
        </div>
        <div class="col-lg-6">

          <?php echo $gimpIcon . $gimpHome; ?>
          <p>GIMP is a well known and widely used Graphics editor that some (not all though) compare to Photoshop</p>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="card">
  <div class="card-header">Internet Related Programs </div>
  <div class="card-block">
    <div class="card-text">
      <div class="row">
        <div class="col-lg-6"></div><?php echo $pidginIcon . $pidginHome; ?><span>Instant Messaging Client</span>
        <div class="col-lg-6"></div><?php echo $thunderbirdIcon . $thunderbirdHome; ?> <span>Email Client</span>
      </div>
    </div>
  </div>
</div>


<div class="card">
  <div class="card-header">Multimedia Programs </div>
  <div class="card-block">
    <div class="card-text">
      <div class="row">
        <div class="col-lg-10">
          <h3> Audio Players  </h3>
            <?php echo $clemIcon . $clemHome; ?>
            <p>Clementine is a music player and organizer that can not only play your music collection, organize your collection (including downloading artist and album information from the internet, and play media from various online sources)</p>

          <h3>Video Players</h3>
            <div class="row">
              <div class="col-sm-4"><?php echo $mpvIcon . $mpvHome; ?></div>
              <div class="col-sm-4"><?php echo $smPlayerIcon . $smPlayerHome; ?> </div>
              <div class="col-sm-4"><?php echo $vlcIcon . $vlcHome; ?></div>
            </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">Productivity/Office Programs</div>
  <div class="card-block">
    <p class="card-text">
      <?php echo $libreOIcon . $libreOHome; ?>
    </p>
  </div>
</div>

<div class="card">
  <div class="card-header">Security Programs </div>
  <div class="card-block">
    <div class="card-text">
      <img src="/techHQ/progIcons/security/cleaners/bleachbit_1.jpg" alt="Bleachbit Icon"/>
      <a href="http://bleachbit.sourceforge.net/">Bleachbit</a>
    </div>
  </div>
</div>


<h1>Specific Operating Systems</h1>
<div class="panel panel-default">
  <div class="panel-heading">Graphics Programs </div>
  <div class="panel-body">
    <h3>Linux</h3>
    <div class="col-sm-4"> <a href="https://www.kde.org/applications/graphics/gwenview/">Gwenview</a></div>
    <div class="col-sm-4"> <a href="http://docs.xfce.org/apps/ristretto/start">Ristretto</a></div>
    <div class="col-sm-4"> <a href="https://pinta-project.com/pintaproject/pinta/">Pinta </a></div>
    <h3> Windows</h3>
      <?php echo $xnviewIcon . $xnviewHome;  ?>
      <p>My Favorite Image editor/so-called... Basic Image editor in Windows ... VERY powerful and well-done, program</p>

  </div>
</div>

<div class="card">
  <div class="card-header">Productivity Programs</div>
  <div class="card-block">
    <div class="card-text">
      <h3>Windows </h3>
      <p>PDF Readers - Adobe Acrobat Reader alternatives</p>
        <div class="row">
          <div class="col-sm-4"><?php echo $sumPDFIcon; echo $sumPDFHome;  ?></div>
          <div class="col-sm-8"><?php echo $pdfXIcon; echo $pdfXHome; ?></div>
        </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">Multimedia Programs </div>
  <div class="card-block">
    <div class="card-text">
      <h2>Linux</h2>
        <div class="col-lg">a(href="http://audacious-media-player.org/") Audacious</div>
        <div class="col-lg">DeadBeef</div>

      <h3>Windows</h3>
        <div class="col-lg"><?php echo $aimpIcon; echo $aimpHome; ?></div>
        <div class="col-lg"><?php echo $foobarIcon; echo $foobarHome; ?></div>
    </div>
  </div>
</div>


<div class="card">
  <div class="card-header">Security Programs </div>
  <div class="card-block">
    <div class="card-text">
      <h3>Windows </h3>

      <div class="row">
        <div class="col-lg-4">
          <img src="/techHQ/progIcons/security/AVs/1589__Avast!FreeAntivirus5_icon.png" alt="Avast Icon"/>
          <a href="http://www.avast.com/free-antivirus-download">Avast </a>
        </div>
        <div class="col-lg-4">
          <img src="/techHQ/progIcons/security/malware/mbam_IDI_MAIN.png" alt="Malwarebytes Icon"/>
          <a href="http://www.malwarebytes.org/">Malwarebytes Anti-Malware</a></div>
        <div class="col-lg-4">
          <a href="https://www.emsisoft.com/en/software/eek/">Emsisoft Emergency Toolkit</a>

      <h2>Cache/Temp File Cleaner </h2>
        <div class="row">

          <div class="col-lg-6">
              <?php echo $ccleanerIcon; echo $ccleanerHome;  ?>
          </div>

          <div class="col-lg-6">
            <?php echo $CCEnhIcon; echo $CCEnhHome; ?>
            <p>A sort of &quot;database&quot; of what to clean for programs that support it  (To add more removable items then the programs default)</p>
          </div>

          </div>
        </div>
      </div> <!-- End of Row DIV -->
    </div>
  </div>
</div>



<div class="card">
  <div class="card-header">System Tools </div>
  <div class="card-block">
    <h2 class="card-title">Windows  </h2>
    <div class="card-text">
      <div class="row">
        <p>
          <a href="https://www.partitionwizard.com/free-partition-manager.html" target="_blank">
             Minitools Partition Manager Freeware Edition </a>
        </p>
        <h4>System Suite</h4>
          <div class="row">
            <div class="col-lg-4"></div><?php echo $glaryIcon . $glaryHome; ?>
            <div class="col-lg-4"></div><?php echo  $wiseCareIcon . $wiseCareHome; ?>
          </div>

      </div>
    </div>
  </div>
</div>
<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
