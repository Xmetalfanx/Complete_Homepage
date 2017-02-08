<?php

    $the_title = 'TechHQ Section - Software';

    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/techHQ/modules/programs.php" ;
    include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>

<div class="row">
  <div class="col-sm-6"><?php echo $softpediaIcon; ?></div>
  <div class="col-sm-6"><?php echo $majorGeeksIcon; ?></div>
</div>

Cross Platform

<div class="panel panel-default">
  <div class="panel-heading">Graphics Applications </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-6">
        <?php
          echo $kritaIcon;
          echo $kritaHome;
        ?>

        Krita is a graphics editor is an open source graphics/illustrator program, which some users compare to
        Adobe Photoshop
      </div>
      <div class="col-lg-6">
        <?php
          echo $gimpIcon;
          echo $gimpHome;
        ?>

        GIMP is a well known and widely used Graphics editor that some
        (not all though) compare to Photoshop
      </div>
    </div>

  </div>
</div>

<div class="panel panel-default">
   <div class="panel-heading">Internet Related</div>
   <div class="panel-body">
     <div class="row">
       <div class="col-lg-6">
         <?php
                echo $pidginIcon;
                echo $pidginHome;
         ?> - Instant Messaging Client
       </div>
       <div class="col-lg-6">
         <?php echo $thunderbirdIcon;
         echo $thunderbirdHome;
         ?> - Email Client
       </div>
     </div>
     </div>
   </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">Multimedia Programs</div>
  <div class="panel-body">
    <h3>Audio Players</h3>

        <?php
            echo $clemIcon;
            echo $clemHome;
            ?>
      <br />

        <p>Clementine is a music player and organizer that can not only play your music collection, organize your
               collection (including downloading artist and album information from the internet, and play media from
              various online sources)
        </p>

        <h3>Video Players</h3>
          <div class="row">
            <div class="col-sm-4">
              <?php
                echo $mpvIcon;
                echo $mpvHome;
              ?>
            </div>
            <div class="col-sm-4">
              <?php
                echo $smPlayerIcon;
                echo $smPlayerHome;
              ?>
            </div>
            <div class="col-sm-4">
              <?php
                echo $vlcIcon;
                echo $vlcHome;
              ?>
            </div>
          </div>
  </div>
</div>


<div class="panel panel-default">
  <div class="panel-heading">Productivity/Office Programs</div>
  <div class="panel-body">
      <?php
        echo $libreOIcon;
        echo $libreOHome;
      ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">Security Programs</div>
    <div class="panel-body">
      <img src="/techHQ/progIcons/security/cleaners/bleachbit_1.jpg" alt="Bleachbit Icon">
        <a href="http://bleachbit.sourceforge.net/">Bleachbit</a>
    </div>
</div>


<h1> Specific Operating Systems </h1>

<div class="panel panel-default">
  <div class="panel-heading">Graphics Programs</div>
    <div class="panel-body">
      <h3>Linux</h3>
        <div class="row">
          <div class="col-sm-4">
            <a href="https://www.kde.org/applications/graphics/gwenview/">Gwenview 1</a> ,
            <a href="https://www.kde.org/applications/graphics/gwenview/">Gwenview 2</a>
          </div>
          <div class="col-sm-4"><a href="http://docs.xfce.org/apps/ristretto/start">Ristretto Viewer</a></div>
          <div class="col-sm-4"><a href="https://pinta-project.com/pintaproject/pinta/">Pinta</a></div>
        </div>
  </div>
</div>


<h3>Windows</h3>
  <?php echo $xnviewIcon;
     echo  $xnviewHome;
  ?>
  <p>My Favorite Image editor/so-called... Basic Image editor in Windows ... VERY powerful and well-done, program</p>


<div class="panel panel-default">
  <div class="panel-heading">Productivity Program</div>
  <div class="panel-body">
    <h3>Windows</h3>
      <p>PDF Readers - Adobe Acrobat Reader alternatives</p>
        <div class="row">
          <div class="col-sm-4"><?php echo $sumPDFIcon; echo $sumPDFHome;  ?></div>
          <div class="col-sm-8"><?php echo $pdfXIcon; echo $pdfXHome; ?></div>
        </div>
  </div>
</div>


<div class="panel panel-default">
  <div class="panel-heading">Multimedia Programs </div>
    <div class="panel-body">
      <h3>Linux</h3>
        <div class="row">
             <div class="col-lg"><a href="http://audacious-media-player.org/">Audacious</a> </div>
             <div class="col-lg">DeadBeef</div>
        </div>

        <h2>Multimedia Programs</h2>
           <h3>Linux</h3>
             <div class="row">
                  <div class="col-lg"><a href="http://audacious-media-player.org/">Audacious</a> </div>
                  <div class="col-lg">DeadBeef</div>
             </div>

           <h3>Windows</h3>
             <div class="row">
               <div class="col-lg">.<?php echo $aimpIcon; echo $aimpHome; ?></div>
               <div class="col-lg"><?php echo $foobarIcon; echo $foobarHome; ?></div>
             </div>
      </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">Security Programs</div>
    <div class="panel-body">
      <h3>Windows</h3>
          <div class="row">
            <div class="col-sm-4">
              <img src="/techHQ/progIcons/security/AVs/1589__Avast!FreeAntivirus5_icon.png" alt="Avast Icon">
              <a href="http://www.avast.com/free-antivirus-download">Avast</a>
            </div>
            <div class="col-sm-4">
                <img src="/techHQ/progIcons/security/malware/mbam_IDI_MAIN.png" alt="Malwarebytes Antimalware Icon">
                <a href="http://www.malwarebytes.org/">Malwarebytes Anti-Malware</a>
            </div>
            <div class="col-sm-4">
              <a href="https://www.emsisoft.com/en/software/eek/">Emsisoft Emergency Toolkit</a>
            </div>
          </div>


           <h3>Cache/Temp File Cleaners</h3>
              <div class="row">
                <div class="col-sm-6"><?php echo $ccleanerIcon; echo $ccleanerHome;  ?></div>
                <div class="col-sm-6"><?php echo $CCEnhIcon; echo $CCEnhHome; ?>
                 A sort of &quot;database&quot; of what to clean for programs that support it
                      (To add more removable items then the programs default)</div>
              </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">System Tools </div>
    <div class="panel-body">
      <h3>Windows</h3>
        <div>
          <a href="https://www.partitionwizard.com/free-partition-manager.html">Minitools Partition Manager Freeware Edition</a>
        </div>

        <h4>System Suite</h4>
        <div class="row">
          <div class="col-sm-6"><?php echo $glaryIcon; echo $glaryHome; ?> </div>
          <div class="col-sm-6"><?php echo  $wiseCareIcon; echo $wiseCareHome; ?></div>
        </div>

    </div>
  </div>


<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
