
<?php

include $_SERVER['DOCUMENT_ROOT'].('/techHQ/modules/programs.php');

  $the_title = 'Xmetals TechHQ Section - Software';
  $the_content = <<<EOD


  <div class="TwoColumns">
      $softpediaIcon
      $majorGeeksIcon
   </div>



    <h1> Cross Platform </h1>
        <h2>Graphics Applications</h2>
           <div class="programSection">
              <div class="TwoColumns">
                  <div>$kritaIcon  $kritaHome <br />Krita is a graphics editor is an open source graphics/illustrator program, which some users compare to
                       Adobe Photoshop </div>

                  <div> $gimpIcon  $gimpHome <br /> GIMP is a well known and widely used Graphics editor that some
                          (not all though) compare to Photoshop</div>
                </div>
             </div>

        <h2>Internet Related</h2>
             <div class="programSection">
                   <div class="TwoColumns">
                      <div>$pidginIcon $pidginHome - Instant Messaging Client </div>
                      <div>$thunderbirdIcon $thunderbirdHome - Email Client</div>
                   </div>
             </div>



      <h2> Multimedia Programs </h2>
           <div class="programSection">
              <h3>Audio Players</h3>
                 <div> $clemIcon $clemHome <br />
                    <p>Clementine is a music player and organizer that can not only play your music collection, organize your
                    collection (including downloading artist and album information from the internet, and play media from
                    various online sources)</p>
                </div>

              <h3>Video Players</h3>
                <div class="ThreeColumns">
                    <div> $mpvIcon $mpvHome </div>
                    <div> $smPlayerIcon $smPlayerHome </div>
                    <div> $vlcIcon $vlcHome </div>
                </div>
          </div>

          <h2>Productivity/Office Programs</h2>
             <div class="programSection">
                <h3>Office Suite</h3>
                     <div> $libreOIcon $libreOHome </div>
            </div>

        <h2>Security Programs</h2>
          <div class="programSection">
            <img src="/techHQ/progIcons/security/cleaners/bleachbit_1.jpg" alt="Bleachbit Icon">
                <a href="http://bleachbit.sourceforge.net/">Bleachbit</a>
          </div>


      <h1> Specific Operating Systems </h1>
        <h2>Graphics Programs </h2>
           <div class="programSection">
                <h3>Linux</h3>
                   <div class="ThreeColumns">
                      <div><a href="https://www.kde.org/applications/graphics/gwenview/">Gwenview 1</a> ,
                           <a href="https://www.kde.org/applications/graphics/gwenview/">Gwenview 2</a></div>

                        <div><a href="http://docs.xfce.org/apps/ristretto/start">Ristretto Viewer</a></div>
                        <div><a href="https://pinta-project.com/pintaproject/pinta/">Pinta</a></div>
                    </div>

                 <h3>Windows</h3>
                          $xnviewIcon $xnviewHome
                          <p>My Favorite Image editor/so-called... Basic Image editor in Windows ...
                          VERY powerful and well-done, program</p>
          </div>


  <h2>Productivity Program </h2>
    <div class="programSection">
      <h3>Windows</h3>
         <p>PDF Readers - Adobe Acrobat Reader alternatives</p>
           <div class="TwoColumns">
                 <div> $sumPDFIcon $sumPDFHome </div>
                 <div> $pdfXIcon $pdfXHome </div>
           </div>
    </div>


   <h2>Multimedia Programs</h2>
  <div class="programSection">
      	   <h3>Linux</h3>
      		 <a href="http://audacious-media-player.org/">Audacious</a>

      	   <h3>Windows</h3>
      		   <div class="TwoColumns">
      				   <div> $aimpIcon $aimpHome</div>
      				   <div> $foobarIcon $foobarHome</div>
      		   </div>
        </div>

   <h2>Security Programs</h2>
     <div class="programSection">
       <h3>Windows</h3>

          <div class="ThreeColumns">
              <div>
                 <img src="/techHQ/progIcons/security/AVs/1589__Avast!FreeAntivirus5_icon.png" alt="Avast Icon">
                 <a href="http://www.avast.com/free-antivirus-download">Avast</a>
              </div>
              <div>
                 <img src="/techHQ/progIcons/security/malware/mbam_IDI_MAIN.png" alt="Malwarebytes Antimalware Icon">
                 <a href="http://www.malwarebytes.org/">Malwarebytes Anti-Malware</a>
             </div>
            <div>
              <a href="https://www.emsisoft.com/en/software/eek/">Emsisoft Emergency Toolkit</a>
            </div>
          </div>
     </div>


     <h3>Cache/Temp File Cleaners</h3>
        <div class="programSection">
            <div class="TwoColumns">
               <div> $ccleanerIcon $ccleanerHome  </div>
               <div> $CCEnhIcon $CCEnhHome A sort of &quot;database&quot; of what to clean for programs that support it
                      (To add more removable items then the programs default)</div>
           </div>


        </div>

   <h2>System Tools</h2>
   <h3>Windows</h3>

      <div class="programSection">
        <div>
           <a href="https://www.partitionwizard.com/free-partition-manager.html">Minitools Partition Manager Freeware Edition</a>
        </div>

       <h4>System Suite</h4>
         <div class="TwoColumns">
    		      <div>$glaryIcon $glaryHome </div>
              <div> $wiseCareIcon $wiseCareHome</div>
          </div>
      </div>

EOD;
?>

<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechSoftwareTemplate.php"); ?>
